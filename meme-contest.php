<?php

include "includes/config.php";

$error  = false;
$erroMessage = '';

// Function to validate email format
function isValidEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate contact format (assumed 10-digit number for simplicity)
function isValidContact($contact)
{
    return preg_match('/^\d{10}$/', $contact);
}

// Function to handle image upload
function uploadImage($file)
{
    $uploadDirectory = 'uploads/memes/';
    $allowedExtensions = ['gif', 'jpg', 'jpeg', 'png', 'PNG', 'JPEG', 'GIF'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    // Get the file extension
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Check if the file extension is allowed
    if (!in_array($fileExtension, $allowedExtensions)) {
        $error  = true;
        $erroMessage = 'Invalid file format. Only GIF, JPG, PNG, and JPEG files are allowed.';
    }

    // Check for file upload errors
    if ($fileError !== 0) {
        $error  = true;
        $erroMessage = 'Error uploading file.';
    }

    // Generate a unique filename to prevent overwriting
    $uniqueFileName = uniqid('image_') . '.' . $fileExtension;

    // Move the uploaded file to the target directory
    if (move_uploaded_file($fileTmpName, $uploadDirectory . $uniqueFileName)) {
        return $uploadDirectory . $uniqueFileName;
    } else {
        $error  = true;
        $erroMessage = 'Error moving uploaded file.';
    }
}

// Function to insert a new post into the database
function insertPost($pdo, $name, $email, $contact, $memberId, $caption, $imagePath)
{
    $stmt = $pdo->prepare("INSERT INTO posts (name, email, contact, member_id, caption, image_path) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $contact, $memberId, $caption, $imagePath]);
    return $stmt;
}


// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $memberId = $_POST['member_id'];
    $caption = $_POST['caption'];
    $imageFile = $_FILES['image'];

    // Validate email and contact
    if (!isValidEmail($email)) {
        $error  = true;
        $erroMessage = 'Invalid email format.';
    }

    if (!isValidContact($contact)) {
        $error  = true;
        $erroMessage = 'Invalid contact format.';
    }

    // Upload the image and get the file path
    $imagePath = uploadImage($imageFile);

    if (!$error) {
        // Insert the post into the database
        if (insertPost($pdo, $name, $email, $contact, $memberId, $caption, $imagePath)) {
            // Set a cookie with user information
            $userCookie = json_encode(['name' => $name, 'email' => $email, 'contact' => $contact, 'member_id' => $memberId]);
            setcookie('user_info', $userCookie, time() + (86400 * 30), "/"); // Cookie valid for 30 days
            $error  = false;
            $erroMessage = 'Post has been successfully uploaded.';
        } else {
            $error  = true;
            $erroMessage = 'Issue while uploading the post, please try after sometime.';
        }
    }
}
function userLiked($pdo, $postId, $ipAddress)
{
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM likes WHERE post_id = ? AND ip_address = ?");
    $stmt->execute([$postId, $ipAddress]);
    $count = $stmt->fetchColumn();
    return ($count > 0);
}

// Function to check if a user has disliked a post
function userDisliked($pdo, $postId, $ipAddress)
{
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM dislikes WHERE post_id = ? AND ip_address = ?");
    $stmt->execute([$postId, $ipAddress]);
    $count = $stmt->fetchColumn();
    return ($count > 0);
}
// Function to fetch all posts


function getPosts($pdo)
{
    $stmt = $pdo->prepare("SELECT *, (SELECT COUNT(*) FROM likes WHERE post_id = posts.id) as likes, 
                                     (SELECT COUNT(*) FROM dislikes WHERE post_id = posts.id) as dislikes 
                           FROM posts ORDER BY created_at DESC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to get like and dislike counts for a post
function getLikeDislikeCounts($pdo, $postId)
{
    $likeStmt = $pdo->prepare("SELECT COUNT(*) as count FROM likes WHERE post_id = ?");
    $dislikeStmt = $pdo->prepare("SELECT COUNT(*) as count FROM dislikes WHERE post_id = ?");
    $likeStmt->execute([$postId]);
    $dislikeStmt->execute([$postId]);
    $likeCount = $likeStmt->fetch(PDO::FETCH_ASSOC)['count'];
    $dislikeCount = $dislikeStmt->fetch(PDO::FETCH_ASSOC)['count'];
    return ['likes' => $likeCount, 'dislikes' => $dislikeCount];
}

// Fetch all posts
$posts = getPosts($pdo);


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Meme Contest - 23rd GCA</title>

    <?php
    include "includes/header_includes.php";
    ?>
    <style>
        .like-dislike-container {
            margin-top: 10px;
        }

        .like-btn,
        .dislike-btn {
            cursor: pointer;
            color: blue;
        }

        .liked,
        .disliked {
            color: green;
            /* Change to your preferred color */
        }
        /* Add this to your CSS file or style tag */

/* Style for liked posts */
.like-btn.liked {
    color: #4CAF50; /* Green color as an example */
}

/* Style for disliked posts */
.dislike-btn.disliked {
    color: #FF5733; /* Orange color as an example */
}

    </style>
</head>

<body class="body-wrapper">


    <!--========================================
=            Navigation Section            =
=========================================-->
    <?php
    include "includes/header.php"
    ?>

    <!--====  End of Navigation Section  ====-->


    <!--================================
=            Page Title            =
=================================-->

    <section class="page-title bg-title overlay-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="title">
                        <h3>Meme Contest</h3>
                    </div>
                    <ol class="breadcrumb justify-content-center p-0 m-0">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active">Meme Contest</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!--===========================
=            About            =
============================-->

    <section class="section schedule two">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Latest Posts</h2>
   
                    
<!-- Main Page Code -->
<?php foreach ($posts as $post): ?>
    <div class="post-container">
        <h2><?php echo $post['name']; ?> - <?php echo $post['created_at']; ?></h2>
        <p><?php echo $post['caption']; ?></p>
        <img src="<?php echo $post['image_path']; ?>" alt="Post Image">

        <div class="like-dislike-container">
            <span class="like-btn <?php echo userLiked($pdo, $post['id'], $_SERVER['REMOTE_ADDR']) ? 'liked' : ''; ?>" 
                onclick="toggleLike(<?php echo $post['id']; ?>, this)">
                <i class="fas fa-thumbs-up"></i>
                <span class="count" id="like-count-<?php echo $post['id']; ?>"><?php echo $post['likes']; ?></span>
            </span>

            <span class="dislike-btn <?php echo userDisliked($pdo, $post['id'], $_SERVER['REMOTE_ADDR']) ? 'disliked' : ''; ?>" 
                onclick="toggleDislike(<?php echo $post['id']; ?>, this)">
                <i class="fas fa-thumbs-down"></i>
                <span class="count" id="dislike-count-<?php echo $post['id']; ?>"><?php echo $post['dislikes']; ?></span>
            </span>
        </div>
    </div>
<?php endforeach; ?>


                </div>

                <div class="col-md-4">
                    <h2>Create a Post</h2>
                    <form method="post" enctype="multipart/form-data" action="">
                        <?php
                        $userCookie = isset($_COOKIE['user_info']) ? json_decode($_COOKIE['user_info'], true) : null;
                        if ($error && $erroMessage != '') {
                            echo '<span class="label label-success">' . $erroMessage . '</span>';
                        } elseif (!$error && $erroMessage != '') {
                            echo '<span class="label label-danger">' . $erroMessage . '</span>';
                        }
                        ?>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $userCookie['name'] ?? ''; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $userCookie['email'] ?? ''; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact:</label>
                            <input type="tel" class="form-control" name="contact" value="<?php echo $userCookie['contact'] ?? ''; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="member_id">Member ID (optional):</label>
                            <input type="text" class="form-control" name="member_id" value="<?php echo $userCookie['member_id'] ?? ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="caption">Caption:</label>
                            <textarea class="form-control" name="caption" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Upload Image (image/gif):</label>
                            <input type="file" class="form-control-file" name="image" accept="image/*,video/*" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>

    </section>




    <!--====  End of Speakers  ====-->

    <!--==============================
=            Schedule            =
===============================-->





    <!--====  End of Schedule  ====-->


    <!--==============================
=            Sponsors            =
===============================-->






    <!--============================
=            Footer            =
=============================-->


    <?php
    include "includes/footer.php";
    include "includes/footer_includes.php";
    ?>
    <!-- Include Font Awesome library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<script>
    // Check if the browser supports localStorage
    if (typeof(Storage) !== 'undefined') {
        // If localStorage is supported, retrieve and apply user's actions on page load
        document.addEventListener('DOMContentLoaded', function() {
            applyUserActions();
        });
    }
    
    function toggleLike(postId, likeBtn, dislikeBtn) {
        $.ajax({
            type: 'POST',
            url: 'like-dislike-handler',
            data: { action: 'toggleLike', post_id: postId },
            dataType: 'json',
            success: function(response) {
                updateButtonStyles(likeBtn, dislikeBtn, response);
            },
            error: function(error) {
                console.error('Error toggling like:', error);
            }
        });
    }

    function toggleDislike(postId, dislikeBtn, likeBtn) {
        $.ajax({
            type: 'POST',
            url: 'like-dislike-handler',
            data: { action: 'toggleDislike', post_id: postId },
            dataType: 'json',
            success: function(response) {
                updateButtonStyles(dislikeBtn, likeBtn, response);
            },
            error: function(error) {
                console.error('Error toggling dislike:', error);
            }
        });
    }

    function updateButtonStyles(activeBtn, inactiveBtn, response) {
        if (response.text === 'Liked') {
            activeBtn.classList.add('liked');
            inactiveBtn.classList.remove('disliked');
        } else if (response.text === 'Disliked') {
            activeBtn.classList.add('disliked');
            inactiveBtn.classList.remove('liked');
        } else {
            activeBtn.classList.remove('liked', 'disliked');
        }

        var likeCountSpan = document.getElementById('like-count-' + response.postId);
        if (likeCountSpan) {
            likeCountSpan.innerText = response.likeCount;
        }

        var dislikeCountSpan = document.getElementById('dislike-count-' + response.postId);
        if (dislikeCountSpan) {
            dislikeCountSpan.innerText = response.dislikeCount;
        }
    } 

    function storeUserAction(postId, action) {
        // Store the user's action locally using localStorage
        localStorage.setItem('userAction_' + postId, action);
    }

    function applyUserActions() {
        // Apply user's stored actions on page load
        var likeButtons = document.querySelectorAll('.like-btn');
        var dislikeButtons = document.querySelectorAll('.dislike-btn');

        likeButtons.forEach(function(likeBtn) {
            var postId = likeBtn.getAttribute('data-post-id');
            var storedAction = localStorage.getItem('userAction_' + postId);

            if (storedAction === 'like') {
                likeBtn.classList.add('liked');
            }
        });

        dislikeButtons.forEach(function(dislikeBtn) {
            var postId = dislikeBtn.getAttribute('data-post-id');
            var storedAction = localStorage.getItem('userAction_' + postId);

            if (storedAction === 'dislike') {
                dislikeBtn.classList.add('disliked');
            }
        });
    }
</script>


</body>

</html>