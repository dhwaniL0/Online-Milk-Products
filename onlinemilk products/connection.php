<?php
$servername = "localhost";
$username = "root";
$password = "";  // Default password for XAMPP is an empty string
$dbname = "milkshop";  // Correct database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
