<?php
// Database connection parameters
define('DB_HOST', 'localhost'); // Change this if your MySQL server is hosted elsewhere
define('DB_USER', 'root'); // Replace with your MySQL username
define('DB_PASS', ''); // Replace with your MySQL password
define('DB_NAME', 'furrify3'); // Replace with your database name

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
