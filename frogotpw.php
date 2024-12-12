<?php

//include config file for the connect with database
require 'config.php';

//get values
$email = $_POST["email"];
$npw = $_POST["pwd"];


//check all vaues
if(empty($email)||empty($npw))
{
    echo "All required";
}
else
{
    //sql query for the 
    $sql = "UPDATE registertion SET npassword='$npw' WHERE email = '$email' ";

    if($con->query($sql))
    {
        echo "<script>
        var userResponse = confirm('Record Updated successfully. Do you want to be redirected to the home page?');
        if (userResponse) {
            window.location.href = 'login.php'; 
        } else {
            window.location.href = 'frogotpassword.php'; 
        }
    </script>";

    }
    else 
    {
        echo "<script>
        alert('Update Unsucsesfull');
        </script>";
    }
}

$con->close();

?> 