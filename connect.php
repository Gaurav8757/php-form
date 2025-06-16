<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_form_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Make the connection available globally
$GLOBALS['conn'] = $conn;

// Optional: Set charset to utf8
mysqli_set_charset($conn, "utf8");
?>