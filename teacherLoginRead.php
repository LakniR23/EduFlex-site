<?php

//include config file
require 'Config.php';

//get values from from
$email = $_POST["email"];
$password = $_POST["pw"];

//sql queryes
$stmt = $con->prepare("SELECT * FROM lecturelogin WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    
    header("Location: homeT.php");
    exit();
} else {
    echo "<script>
            alert('Invalid email or password. Please try again.');
            window.location.href = 'teacherLogin.php'; // Redirect back to login page
          </script>";
    
}


$stmt->close();
$con->close();
?>
