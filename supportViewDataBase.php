<?php
    include 'config.php'; 
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Meta tags for proper character encoding and responsive design -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Tab icon -->
        <link rel="icon" href="images/logo1.png">
        <!-- Page title -->
        <title>Edu Flex</title>
        <!-- CSS links -->
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/home.css">
        <script src="js/index.js"></script>
        <script type="text/javascript" src="js/search1.js"></script>
        <!-- Font Awesome for icons -->
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

/* Style for table rows */
table tr {
    background-color: #f3f3f3;  
    transition: background-color 0.3s ease;  */
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




</style> </head>

    <body>
        

        <h1 style="text-align:center">Support Details : </h1>

        <?php
            //sql query for retrive data
            $sql = "SELECT id,firstName,lastName,contact,email,message,status FROM supportdb"; 
            $result = $con->query($sql); 
            if($result->num_rows > 0)
            { 
                echo "<table border='1'>"; 
                    echo "<tr style='text-align:center; height:20px;'>";
                    echo "<th>ID</th>";
                        echo "<th>First name</th>";
                        echo "<th>Last name</th>";
                        echo "<th>Contact</th>";
                        echo "<th>Email</th>";
                        echo "<th>Message</th>";
                        echo "<th>Status</th>"; 
                    echo "</tr>";
 
                    //while loop for display all data in databaese
                    while($row = $result->fetch_assoc()) 
                    {
                        echo "<tr>"; 
                        echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["firstName"] . "</td>"; 
                            echo "<td>" . $row["lastName"] . "</td>"; 
                            echo "<td>" . $row["contact"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>"; 
                            echo "<td>" . $row["message"] . "</td>"; 
                            echo "<td>" . $row["status"] . "</td>"; 
                        echo "</tr>";
                    }
                echo "</table>";
            } 
            else 
            {
                echo "No results found"; 
            }
        ?>

    <button onclick="returns()" style="display: block; margin: 10px auto ;" class="return">Return</button>

    <script>
        function returns()
        {
            window.location.href = 'adminhome.php';
        }
    </script>

   
    </body>
</html>
