<?php
// Enable error reporting for debugging (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection settings
$host = "127.0.0.1";     // Use IP to force TCP/IP connection
$username = "root";
$password = "root";      // Your MySQL root password
$database = "profsense_db";
$port = 3307;            // MySQL port in your XAMPP configuration

// Create the connection
$conn = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
