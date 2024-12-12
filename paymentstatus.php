<!DOCTYPE html>
<html>
<head>
    <!--to specify the character encoding of the document-->
    <meta charset="UTF-8">
    <!--to match the device's width and set initial zoom level to 1.0-->
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
    <link rel="stylesheet" href="css/adminadd.css">
    <script type="text/javascript" src="js/index.js"></script>
    <!--font awesome link for the header is obtained from cdnjs.com site.-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="about us/aboutus.js" defer></script>

    <style>
        body {
            background-image: url("images/adminbackground.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            }

        </style>



</head>
<style>

    </style>
<body>
    <br><br><br><br><br><br><br><br>


    <form method="post" action="paymentupdate.php">
    <fieldset>
        <legend>Payment Update</legend>
        ID : <input type="text" name = "id"><br>
        Status : <input type = "text" name = "status"><br>

        <button type="submit" class="add-admin-btn" >Update </button>

    </fieldset>
    </form>

    <button onclick="returns()" style="display: block; margin: 10px auto ;" class="return">Return</button>

    
</body>
</html>
