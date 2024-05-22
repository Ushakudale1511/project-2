 <?php 


///Rehisteration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $collegename = $_POST["collegename"];
    $email = $_POST["email"];
    $password = $_POST["password"];

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

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO signup (firstname, lastname, collegename, email, password) VALUES (?, ?, ?, ?, ?)");

    if (!$stmt) {
        die('Error in preparing the statement: ' . $conn->error);
    }

    $stmt->bind_param("sssss", $firstname, $lastname, $collegename, $email, $password);

    $stmt->execute();

    if ($stmt->error) {
        die('Error in executing the statement: ' . $stmt->error);
    }

    echo "<script type='text/javascript'> alert('Successfully Register')</script>";

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}


  ///log in
  


   
  ?> 