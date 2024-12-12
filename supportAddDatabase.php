<?php
    require 'config.php'; //include config file
    
    $sfname = $_POST["fname"];
    $slname = $_POST["lname"];
    $snumber = $_POST["number"];
    $semail = $_POST["email"];
    $smessage = $_POST["message"];
    $sstatus = "Pending";

    //sql query for insert data
    $sql = "INSERT INTO supportdb VALUES ('','$sfname','$slname','$snumber','$semail','$smessage', '$sstatus')";

    if($con->query($sql))
    {  
            echo "<script>
            alert('Successfully Added!');
            window.location.href = 'contact.php';
            </script>";
    }
    else {
        echo "Error".$con->error;
    }

    $con->close();
?>