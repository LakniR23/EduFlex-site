<?php
    //include config file for connect with data
    require 'config.php';
    
    //get the data from form
    $course = $_POST['course-id'];
    $cardholder_name = $_POST['cardholder-name'];
    $card_number = $_POST['card-number'];
    $expiry_date = $_POST['expiry-date'];
    $cvv = $_POST['cvv'];
    $billing_address = $_POST['billing-address'];
    $zip_code = $_POST['zip-code'];
    $amount = $_POST['amount'];
    $currentDateTime = date('Y-m-d H:i:s');
    $status = "Pending";


    //sql query for instert data into database
    $sql = "INSERT INTO payments VALUES ('','$course','$cardholder_name','$card_number','$expiry_date','$cvv', '$billing_address','$zip_code','$currentDateTime','$amount','$status')";

    if ($con->query($sql)) {
        // Payment is successful
        echo "<script>
            alert('Payment Successful!');
            if ('$course' == 'IT1030') {
                window.location.href = 'modules3.php';
            } else if ('$course' == 'IT1040') {
                window.location.href = 'modules4.php';
            }
            else
            {
                alert('Course ID not found!');
            }
        </script>";
    } else {
        echo "<script>
            alert('Payment Unsuccessful!');
            window.location.href = 'payment.php'; 
        </script>";
    }
    
    $con->close();
    ?>