<!DOCTYPE html>
<html>
    <head>
        <!--to specify the character encoding of the document-->
        <meta charset="UTF-8">
        <!--to match the the device's width and set initial zoom level to 1.0-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--enter the logo as icon on the tab-->
        <link rel="icon" href="images/logo1.png">
        <!--name of the tab-->
        <title>Edu Flex</title>
        <!--link the css file with the header css-->
        <link rel="stylesheet" href="css/header.css">
        <!--link the css file with the footer css-->
        <link rel="stylesheet" href="css/footer.css">
         <!--link the css file with the program css-->
         <link rel="stylesheet" href="css/pay.css">
         <script type="text/javascript" src="js/index.js"></script>
        <!--font awesome link for the header is obtained from cdnjs.com site. then type font awesome. them copy the htl code inside </>-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        

    </head>
    <body>

    <br><br><br>
    <center><h1>Payments</h1></center>
        <style>
            
table {
    width: 80%;                
    border-collapse: collapse;   
    margin: 25px auto;          
    font-size: 1rem;
    font-family: Arial, sans-serif;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15); 
}


table th, table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd; 
}

table th {
    background-color:#000000; 
    font-weight: bold;
    text-transform: uppercase; 
    color:white;
}


table tr {
    background-color: #f3f3f3;  
    transition: background-color 0.3s ease; 
}


table tr:nth-child(even) {
    background-color: #e9e9e9;
}


table tr:hover {
    background-color: #D6DFCE; 
}


table td {
    color: #333; 
}

table {
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden; 
}


table {
    margin-left: auto;
    margin-right: auto;
    margin-top: 25px;
}


    .return {
    background-color: #1d67d6; 
    color: white; 
    border: none; 
    padding: 10px 20px; 
    text-align: center; 
    text-decoration: none; 
    display: inline-block; 
    font-size: 16px; 
    margin: 10px auto; 
    cursor: pointer; 
    border-radius: 5px; 
    transition: background-color 0.3s ease; 
}

.return:hover {
    background-color: #45a049; 
}


body {
    background-image: url("images/adminbackground.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    }    

    

</style>
<?php
    //include config file
    require 'config.php';

    //sql query for retrive payament data
    $sql = "SELECT id,cardholder_name, card_Number, expiry_date, cvv, billing_address, zip_code,created_at,amount,status FROM payments  ";
    $result = $con->query($sql);

    // Check if there are results and display them in a table
    if ($result->num_rows > 0) {
        echo "<table border='1'>";       
         echo "<th>id</th>
              <th>Cardholder Name</th>
              <th>Card Number</th>
              <th>Expiry Date</th>
              <th>CVV</th>
              <th>Billing Address</th>
              <th>Zip Code</th>
              <th>created_at</th>
              <th>Amount</th>
              <th>status</th>";


              //while loop for disply all data 
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["cardholder_name"] . "</td>";
            echo "<td>" . $row["card_Number"] . "</td>";
            echo "<td>" . $row["expiry_date"] . "</td>";
            echo "<td>" . $row["cvv"] . "</td>";
            echo "<td>" . $row["billing_address"] . "</td>";
            echo "<td>" . $row["zip_code"] . "</td>";
            echo "<td>" . $row["created_at"] . "</td>";
            echo "<td>" . $row["amount"] . "</td>";
            echo "<td>" . $row["status"] . "</td>";

            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No results";
    }

    $con->close();
    ?>

<button onclick="returns()" style="display: block; margin: 10px auto ;" class="return">Return</button>


        
    </body>
    
    </html>
    </html>