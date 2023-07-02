<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Connect to the database
$servername = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbname = 'your_database';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO Users (Name, Email, Phone) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $phone);
$stmt->execute();

// Close the database connection
$stmt->close();
$conn->close();

// Redirect back to the registration page
header('Location: index.html');
?>
