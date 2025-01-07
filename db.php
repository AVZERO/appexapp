<?php
// db.php

// Database configuration
$servername = "localhost"; // MySQL server
$username = "root";         // Default username for XAMPP
$password = "";             // Default password for XAMPP (usually empty)
$dbname = "apexdb"; // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Set character set to utf8
$conn->set_charset("utf8");

?>
