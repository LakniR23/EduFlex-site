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
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <script type="text/javascript" src="js/index.js"></script>
   
    <!--font awesome link for the header is obtained from cdnjs.com site. then type font awesome. them copy the htl code inside </>-->
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


    <!--details of data base-->
    <br><br><br><br><br><br><br><br>

    <fieldset>
       
       <form method="post" action="reg_delete.php">
          <h1>Delete User</h1>
          <hr>
          Email : <input type="text" name="email" required> <br>
          <br>
          <button class="register" type="submit" width = 200px >Delete</button>
          </h4>
        </form>
    </fieldset>

    <button onclick="returns()" style="display: block; margin: 10px auto ;" class="return">Return</button>


</body>




</html>


          

     





















