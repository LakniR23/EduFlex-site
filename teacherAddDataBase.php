<?php

require 'config.php'; //include config file for connection

//get values from form
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["pw"];

//sql query for insert data
$sql = "INSERT INTO lecturelogin VALUES('$name','','$email','$password')";

if($con->query($sql))
{
    echo "<script>
        var userResponse = confirm('Record Added successfully. Do you want to be redirected to the home page?');
        if (userResponse) {
            window.location.href = 'adminhome.php'; 
        } else {
            window.location.href = 'teacherAdd.php'; 
        }
    </script>";
}
else
{
    echo "<script>
        alert('Adding Unsucsesfull');
        </script>"; 

}

$con->close();

?> 