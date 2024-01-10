<?php
// Database configuration
$host = "localhost";
$dbname = "23gca";
$username = "root";
$password = "";

// $host = "68.178.155.150";
// $dbname = "23gca";
// $username = "Fahim";
// $password = "Fahim@123";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>