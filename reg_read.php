<!DOCTYPE html>
<html>
    <head>
        <!--to specify the character encoding of the document-->
    <meta charset="UTF-8">
    <!--to match the the device's width and set initial zoom level to 1.0-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--enter the logo as icon on the tab-->
    <link rel="icon" href="images/logo3.png">
    <!--name of the tab-->
    <title>Registration</title>

    <!--link the css file with the header css-->
   
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <script type="text/javascript" src="js/index.js"></script>   
    <!--font awesome link for the header is obtained from cdnjs.com site. then type font awesome. them copy the htl code inside </>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    background-color: #000000; 
    color: white;              
    font-weight: bold;
    text-transform: uppercase; 
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
    background-color: #45a049; /
}

body {
    background-image: url("images/adminbackground.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    }

       
            
</style>

</head>
    <body>

    <br><br><br><br><br>
    <h1 style="text-align:center">User Details :</h1>
 
<?php
require 'config.php'; //include config file

//sql query for retrive data
$sql="SELECT fname,lname,email,country_code,contact,npassword,country,birth,gender from registertion";

$result=$con->query($sql);


// Check if there are results and display them in a table
if($result->num_rows>0)
{  
    
    echo "<table border='1'>";

    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Email</th>";
    echo "<th>Country Code</th>";
    echo "<th>Contact</th>";
    echo "<th>New Password</th>";
    echo "<th>Country</th>";
    echo "<th>Birth</th>";
    echo "<th>Gender</th>"; 
    echo "</tr>";

    //whole loop for display data
    while($row=$result->fetch_assoc())
    { 
        echo  "<tr>";
        echo "<td>" .$row["fname"]."</td>"."<td>" .$row["lname"]."</td>"."<td>" .$row["email"]."</td>"."<td>" .$row["country_code"]."</td>"."<td>" .$row["contact"]."</td>"."<td>" .$row["npassword"]."</td>"."<td>" .$row["country"]."</td>"."<td>" .$row["birth"]."</td>"."<td>" .$row["gender"]."</td>" ;
        echo "</tr>";
    }
    echo "</table>";
   

}
else{
    echo "No results" ;
}


$con->close();




?>

<button onclick="returns()" style="display: block; margin: 10px auto ;" class="return">Return</button>
<br><br>
</body>



</html>
    
