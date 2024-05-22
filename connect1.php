<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

 
 session_start();
 
 // Database connection parameters
 $host = 'localhost';
 $user = 'root';
 $password_db = '';
 $database = 'project';
 
 // Create a database connection
 $conn = new mysqli($host, $user, $password_db, $database);
 
 // Check the connection
 if ($conn->connect_error) {
     die('Connection Failed: ' . $conn->connect_error);
 }
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // Collect form data
     $email = $_POST["email"];
     $password = $_POST["password"];

     // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
 
     // Prepare and execute the SQL statement
     $stmt = $conn->prepare("SELECT * FROM signup WHERE email = ?");
     $stmt->bind_param("s", $email);
     $stmt->execute();

    
    
 
     // Get the result
     $result = $stmt->get_result();
 
     // Check if the user exists
     if ($result->num_rows > 0) {
         $row = $result->fetch_assoc();
         // Verify the password
         if (password_verify($password, $row['password'])) {
            echo "<script type='text/javascript'> alert('Login Successful')</script>";
        } else {
            echo "<script type='text/javascript'> alert('Incorrect Password: " . $row['password'] . "')</script>";
        }
        
         }
     } else {
         echo "<script type='text/javascript'> alert('User not found')</script>";
     }
 
     // Close the statement and connection
     $stmt->close();
 
 
 // Close the database connection
 $conn->close();
 ?>