<!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Meta tags for proper character encoding and responsive design -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Tab icon -->
        <link rel="icon" href="images/logo1.jpg">

        <!-- Page title -->
        <title>Edu Flex</title>

        <!-- CSS links -->
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/support.css">
        <script type="text/javascript" src="js/search1.js"></script>
        <script type="text/javascript" src="js/index.js"></script>

        <!-- Font Awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
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

        
    </head>

    <body>
    <br><br><br><br><br><br><br><br><br><br><br><br>
        <form method="post" action="supportRemoveDataBase.php">
        <fieldset>
            <legend>Support Remove</legend>
            
            
            ID: <input type = "text" name = "id"><br>
            <button type="submit" class="remove-support-btn" >REMOVE</button>
        </fieldset>
        </form>

        <button onclick="returns()" style="display: block; margin: 10px auto ;" class="return">Return</button> 
    </body>
</html>