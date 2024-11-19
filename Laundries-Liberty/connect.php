<?php
// Database configuration
$host = "localhost"; // Server hostname
$username = "root";  // Database username
$password = "";      // Database password
$dbname = "smart_wash"; // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
