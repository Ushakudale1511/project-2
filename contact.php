<?php
// Replace these variables with your actual database credentials
$host = "your_host";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Create a connection to the database
$mysqli = new mysqli($host, $username, $password, $database);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// If the connection is successful, you can perform database operations here

// Close the connection when done
$mysqli->close();
?>
