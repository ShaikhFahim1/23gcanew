<?php
include "includes/config.php";

// require 'includes/emailSender.php';

$error  = false;
$erroMessage = ''; 
function getLikeDislikeCounts($pdo, $postId) {
    $likeStmt = $pdo->prepare("SELECT COUNT(*) as count FROM likes WHERE post_id = ?");
    $dislikeStmt = $pdo->prepare("SELECT COUNT(*) as count FROM dislikes WHERE post_id = ?");
    $likeStmt->execute([$postId]);
    $dislikeStmt->execute([$postId]);
    $likeCount = $likeStmt->fetch(PDO::FETCH_ASSOC)['count'];
    $dislikeCount = $dislikeStmt->fetch(PDO::FETCH_ASSOC)['count'];
    return ['likes' => $likeCount, 'dislikes' => $dislikeCount];
}

function userLiked($pdo, $postId, $ipAddress) {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM likes WHERE post_id = ? AND ip_address = ?");
    $stmt->execute([$postId, $ipAddress]);
    $count = $stmt->fetchColumn();
    return ($count > 0);
}

// Function to check if a user has disliked a post
function userDisliked($pdo, $postId, $ipAddress) {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM dislikes WHERE post_id = ? AND ip_address = ?");
    $stmt->execute([$postId, $ipAddress]);
    $count = $stmt->fetchColumn();
    return ($count > 0);
}

// Function to remove a dislike
function removeDislike($pdo, $postId, $ipAddress) {
    $query = "DELETE FROM dislikes WHERE post_id = :post_id AND ip_address = :ip_address";
    $statement = $pdo->prepare($query);
    $statement->execute(['post_id' => $postId, 'ip_address' => $ipAddress]);
}

// Function to add a dislike
function addDislike($pdo, $postId, $ipAddress) {
    $query = "INSERT INTO dislikes (post_id, ip_address) VALUES (:post_id, :ip_address)";
    $statement = $pdo->prepare($query);
    $statement->execute(['post_id' => $postId, 'ip_address' => $ipAddress]);
}


// Function to toggle a dislike
function toggleDislike($pdo, $postId, $ipAddress) {
    if (userDisliked($pdo, $postId, $ipAddress)) {
        removeDislike($pdo, $postId, $ipAddress);

    } else {
        addDislike($pdo, $postId, $ipAddress);
    }
}

// Function to remove a like
function removeLike($pdo, $postId, $ipAddress) {
    $query = "DELETE FROM likes WHERE post_id = :post_id AND ip_address = :ip_address";
    $statement = $pdo->prepare($query);
    $statement->execute(['post_id' => $postId, 'ip_address' => $ipAddress]);
}
// Function to add a like
function addLike($pdo, $postId, $ipAddress) {
    $query = "INSERT INTO likes (post_id, ip_address) VALUES (:post_id, :ip_address)";
    $statement = $pdo->prepare($query);
    $statement->execute(['post_id' => $postId, 'ip_address' => $ipAddress]);
}


// Function to toggle a like
function toggleLike($pdo, $postId, $ipAddress) {
    if (userLiked($pdo, $postId, $ipAddress)) {
        removeLike($pdo, $postId, $ipAddress);
    } else {
        addLike($pdo, $postId, $ipAddress);
    }
}

// Handle the AJAX request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $postId = $_POST['post_id'];
    $ipAddress = $_SERVER['REMOTE_ADDR'];

    // Toggle like or dislike based on current status
    if ($action === 'like') {
        if (userLiked($pdo, $postId, $ipAddress)) {
            removeLike($pdo, $postId, $ipAddress);
        } else {
            toggleLike($pdo, $postId, $ipAddress);
        }
    } elseif ($action === 'dislike') {
        if (userDisliked($pdo, $postId, $ipAddress)) {
            removeDislike($pdo, $postId, $ipAddress);
        } else {
            toggleDislike($pdo, $postId, $ipAddress);
        }
    }

    // Return the updated like and dislike counts
    $likeCount = getLikeDislikeCounts($pdo, $postId)['likes'];
    $dislikeCount = getLikeDislikeCounts($pdo, $postId)['dislikes'];

    echo json_encode(['likeCount' => $likeCount, 'dislikeCount' => $dislikeCount , 'postId'=>$postId]);
}
?>
