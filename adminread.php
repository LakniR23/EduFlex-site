<?php
// Include database configuration file
require 'config.php';

// Get the form data
$email = $_POST["email"];
$password = $_POST["pw"];

// Prepare an SQL statement
$stmt = $con->prepare("SELECT * FROM adminlogin WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Redirect to home.php if login is successful
    header("Location: adminhome.php");
    exit();
} else {
    echo "<script>
            alert('Invalid email or password. Please try again.');
            window.location.href = 'AdminLoging.php'; // Redirect back to login page
          </script>";
    
}

// Close statement and connection
$stmt->close();
$con->close();
?>
