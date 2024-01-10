<?php
include "includes/config.php";

// require 'includes/emailSender.php';

$error  = false;
$erroMessage = ''; 

// Assuming you have a database connection here

try {
    $stmt = $pdo->query("SELECT * FROM mcq_questions");
    $mcqQuestions = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($mcqQuestions);
} catch (PDOException $e) {
    // Handle database connection or query errors
    http_response_code(500);
    echo "Error: " . $e->getMessage();
}

?>