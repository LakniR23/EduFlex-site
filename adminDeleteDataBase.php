<?php

//include config files to connect database
require 'config.php';


//get the email from submitted form
$id = $_POST["id"];

//insert data into database table
$sql = "DELETE FROM adminlogin  WHERE id = '$id'";

if($con->query($sql))
{
    echo "
    <script>
        var userResponse = confirm('Record deleted successfully. Do you want to be redirected to the home page?');
        if (userResponse) {
            window.location.href = 'adminhome.php'; 
        } else {
            window.location.href = 'adminDelete.php'; 
        }
    </script>";

}


else 
{
    echo "Not Deleted!";
}

$con->close();

?> 