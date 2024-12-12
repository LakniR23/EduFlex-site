<?php

//include config file
require 'Config.php';

//get values for form
$id = $_POST["id"];

//sql query for delete from database 
$sql = "DELETE FROM payments WHERE id = '$id'";

if($con->query($sql))
{
    echo "
    <script>
        var userResponse = confirm('Record Refunded successfully. Do you want to be redirected to the home page?');
        if (userResponse) {
            window.location.href = 'adminhome.php'; 
        } else {
            window.location.href = 'paymentdelete.php'; 
        }
    </script>";

}


else 
{
    echo "<script>
        alert('Delete Unsucsesfull');
        </script>";
}

$con->close();

?> 