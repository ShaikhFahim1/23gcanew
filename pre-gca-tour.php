<?php

include "includes/config.php";

// require 'includes/emailSender.php';

$error  = false;
$erroMessage = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = trim($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $mobile = $_POST["mobile"];
    $options = implode(", ", $_POST["options"]); // Convert array to comma-separated string

    // Set up database connection using PDO
    // Validate email
    if (!$email) {
        // Invalid email format
        header('Location: pre-gca-tour.php?status=failed&message=Invalid email address.#form');
        exit();
    }
    try {
    
        // Prepare and execute the SQL statement
        $sql = "INSERT INTO tbl_pregcatour (name, email, mobile, options) VALUES (:name, :email, :mobile, :options)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':mobile', $mobile, PDO::PARAM_STR);
        $stmt->bindParam(':options', $options, PDO::PARAM_STR);
        $stmt->execute();

        $headers = 'From: gca@actuariesindia.org' . "\r\n" .
    'CC: Deepa@magictoursofIndia.com, ranjeet@delhimagic.com, gca@actuariesindia.org' . "\r\n" .
    'MIME-Version: 1.0' . "\r\n" .
    'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Send the email
$subject = "Acknowledgment of Your Selected Pre-Conference Tour Option Pre GCA 2024";
mail($email, $subject, getApiEmailBody(ucfirst($name)), $headers);

    // sendEmail($email,"Acknowledgment of Your Selected Pre-Conference Tour Option Pre GCA 2024",getApiEmailBody($name));
       
       $error = false;
        
        $pdo = null;
        header('Location: pre-gca-tour?status=success&message=Form submitted successfully.#form');
        exit();
        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


function getApiEmailBody($name)
{
    // Customize the email body according to your API format
    $message = "Dear ".$name.","; 
    $message .= "<br><br>Thanks for selecting a tour option through our platform.<br><br>";
    $message .= "Your selected tour option has been duly marked and communicated to the tour operator. ";
    $message .= "They will be in touch with you shortly to provide further details and ensure that your tour experience is seamless and enjoyable. ";
    $message .= "We trust that you will have a fantastic time exploring the destination.<br>";
    $message .= "<br>Book now and discover the charm of Mumbai alongside the Global Conference of Actuaries.<br>";
    $message .= "#MumbaiTour #GCA2024<br><br>";
    $message .= "Kind Regards,<br>Institute of Actuaries of India";
    return $message;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Pre-GCA Tour - Explore Mumbai with Us! - 23rd GCA</title>

    <?php
    include "includes/header_includes.php";
    ?>

    <style>
        .about .content-block {
            margin: 15px 0 !important;
        }

        .about .content-block .description-one p {
            margin-bottom: 15px;
        }

        .dot {
            color: #222222;
        }

        .tour-option {
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: box-shadow 0.3s ease-in-out;
            border: 1px solid #ccc;
            height: 420px;
        }

        .tour-option:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .tour-image {
            width: 100%;
            height: 165px;
            display: block;
        }

        .tour-details {

            width: 100%;
            background: rgba(255, 255, 255, 0.9);
            padding: 10px;
            box-sizing: border-box;
        }

        .tour-title {
            font-size: 1em;
            margin: 0;
        }

        .tour-description {
            font-size: 0.8em;
            margin: 5px 0 0;
        }

        .read-more-btn {
            position: absolute;
    bottom: 10px;
    left: 10px;
    font-size: 12px;
        }


     
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form-container button {
            background-color: #922dd4;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-container button:hover {
            background-color: #2980b9;
        }
        #venue p{
            color: #222222;
        }
    </style>
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
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
                        <h3>Pre GCA Tour</h3>
                    </div>
                    <ol class="breadcrumb justify-content-center p-0 m-0">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active">Pre-GCA Tour</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!--===========================
=            About            =
============================-->

    <section id="venue" class="wow ">

        <div class="container">

            <div class="row no-gutters">

                <div class="wrapper ">
                    <div class="">
                        <h5><b>Pre-GCA Tour - Explore Mumbai with Us!</b></h5>

                        <p>Enhance your conference experience with our exclusive Pre-Conference Mumbai Tour. Select your preferred options and pay directly to the vendor. </p>

                    
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-30">
                            <h5><b>I. TOUR OPTIONS:</b></h5>
                        </div>

                        <div class="col-md-3">
                            <div class="tour-option">
                                <img class="tour-image" src="assets/images/pre-tour/mumbai dabbawala.jpg" alt="Tour Image">
                                <div class="tour-details">
                                    <h6 class="tour-title">City Must-sees including dabbawallas</h6>
                                    <p class="tour-description">Sites This tour tells the 500-year story of Mumbai’s transformation from a small fishing hamlet into India’s commercial capital. <br>- Duration: 4 hrs</p>
                                    <button class="read-more-btn btn btn-primary" data-toggle="modal" data-target="#myModal">Read More</button>
                                    <!-- Modal Code (Same as before) -->
                                    <div id="myModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">City Must-sees including dabbawallas</h6>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        - Sites This tour tells the 500-year story of Mumbai’s transformation from a small fishing hamlet into India’s commercial capital. On all days except Sundays, we will also see the “dabbawallas,” Mumbai’s famous food-delivery system.
                                                    <ul>
                                                        <li>The Gateway of India
                                                        </li>
                                                        <li>Kala Ghoda District
                                                        </li>
                                                        <li>Bombay University, High Court, and the Oval Maidan
                                                        </li>
                                                        <li>Victoria Terminus
                                                        </li>
                                                        <li>Crawford Market
                                                        </li>
                                                        <li>Marine Drive and Chowpatty Beach
                                                        </li>
                                                        <li>Mani Bhavan, home of Gandhi
                                                        </li>
                                                        <li>Malabar Hill and the Hanging Gardens
                                                        </li>
                                                        <li>Dhobi Ghat </li>
                                                    </ul>
                                                    - Duration: 4 hrs
                                                    - Cost: 2000 INR Per Person

                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="tour-option">
                                <img class="tour-image" src="assets/images/pre-tour/sanjay gandhi.webp" alt="Tour Image">
                                <div class="tour-details">
                                    <h6 class="tour-title">Nature Trail through Sanjay Gandhi National Park</h6>
                                    <p class="tour-description">This tour offers a serene and immersive experience amidst the rich biodiversity and natural beauty of the park. <br>- Duration: 2-2.5 hrs, (excluding transport time)</p>
                                    <button class="read-more-btn btn btn-primary" data-toggle="modal" data-target="#myModal1">Read More</button>
                                    <!-- Modal Code (Same as before) -->
                                    <div id="myModal1" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">Nature Trail through Sanjay Gandhi National Park</h6>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        - This tour offers a serene and immersive experience amidst the rich biodiversity and natural beauty of the park. This trail provides visitors with the opportunity to explore the park's diverse flora and fauna, witness scenic landscapes, and connect with the tranquil surroundings.
                                                        - Duration: 2-2.5 hrs, (excluding transport time)
                                                        - Cost: 4300 INR Per Person
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="tour-option">
                                <img class="tour-image" src="assets/images/pre-tour/bollywood (3).jpg" alt="Tour Image">
                                <div class="tour-details">
                                    <h6 class="tour-title">Bollywood: World of Dreams </h6>
                                    <p class="tour-description">A tour of Mumbai’s Film and Television Industry<br>- Duration: The studio visit and dance lasts around 1-2 hour. The total duration including drive time and lunch/dinner is between 5-6 hrs.</p>
                                    <button class="read-more-btn btn btn-primary" data-toggle="modal" data-target="#myModal2">Read More</button>
                                    <!-- Modal Code (Same as before) -->
                                    <div id="myModal2" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">Bollywood: World of Dreams </h6>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>- A tour of Mumbai’s Film and Television Industry
                                                        - Duration: The studio visit and dance lasts around 1-2 hour. The total duration including drive time and lunch/dinner is between 5-6 hrs.
                                                        - Cost: 7000 INR Per Person


                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="tour-option">
                                <img class="tour-image" src="assets/images/pre-tour/adivasi village.jpg" alt="Tour Image">
                                <div class="tour-details">
                                    <h6 class="tour-title">A Day at an Adivasi Village</h6>
                                    <p class="tour-description">Hop into a vehicle and head to the countryside near Mumbai.<br>- Duration: 10- 12 hrs </p>
                                    <button class="read-more-btn btn btn-primary" data-toggle="modal" data-target="#myModal3">Read More</button>
                                    <!-- Modal Code (Same as before) -->
                                    <div id="myModal3" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">A Day at an Adivasi Village</h6>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p> - Hop into a vehicle and head to the countryside near Mumbai. Spend a day among the Adivasi people and learn about the tribal way of life. Volunteer at the local school to play educational games with the children.
                                                        - Duration: 10- 12 hrs
                                                        - Cost: 7,950 INR Per Person
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 mt-30">
                            <h5><b>II HOW TO BOOK: </b></h5>
                            <p>Select your preferred option and date, and we will facilitate the connection with our tour operator to proceed with the arrangements.</p>
                            <p>🗓️ Date of Tour: Saturday, 10 February 2024 OR Sunday, 11 February 2024</p>
                            <p>🌆 Tour Options:
                            <ul>
                                <li>1 City Must-sees including dabbawallas </li>
                                <li>2 Nature Trail through Sanjay Gandhi National Park </li>
                                <li>3 Bollywood: World of Dreams</li>
                                <li>4 Day at an Adivasi village</li>

                            </ul>


                            </p>
                        </div>

                        <div class="col-md-12 mt-1" id="form">
                            <h5><b>III FORM: </b></h5>
                            <div class="form-container">

                                <form action="" method="post">
                                    <?php
                                    // Display success message if set in the URL
                                    if (isset($_GET['status']) && $_GET['status'] == "success" && $_GET['message'] !='') {
                                        echo '<div class="success-label">' . $_GET['message'] . '</div>';
                                    }elseif(isset($_GET['status']) && $_GET['status'] == "failed" && $_GET['message'] !=''){
                                        echo '<div class="danger-label">' . $_GET['message'] . '</div>';
                                    }
                                    ?>
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="mobile">Mobile Number:</label>
                                        <input type="tel" class="form-control" id="mobile" name="mobile" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleMultiSelect">Options:</label>
                                        <select class="form-control" id="exampleMultiSelect" name="options[]" multiple required>
                                            <option>City Must-sees including dabbawallas</option>
                                            <option>Nature Trail through Sanjay Gandhi National Park</option>
                                            <option>Bollywood: World of Dreams</option>
                                            <option>A Day at an Adivasi Village</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit Enquiry</button>
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

<!-- Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Select2
        $('#exampleMultiSelect').select2({
           
            placeholder: 'Select options',
            allowClear: true,
        });
    });
</script>



</body>

</html>