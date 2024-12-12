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
    <script type="text/javascript" src="js/search1.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
   
    <!--font awesome link for the header is obtained from cdnjs.com site. then type font awesome. them copy the htl code inside-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>

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


    

    <fieldset>
       
       <form method="post" action="reg_update.php" onsubmit="return validatePasswords();" >

          <h1>Update User Details</h1>
          <hr>
          
          Email : <input type="text" name="email" required> <br>
          <h4 class="info">First Name : <input type="text" name="first_name" required>  Last Name : <input type="text" name="last_name" required><br>
          <br>
          
          <br>
          Contact no : <select name="country_code" required>
            <option value="+1">United States (+1)</option>
            <option value="+44">United Kingdom (+44)</option>
            <option value="+91">India (+91)</option>
            <option value="+61">Australia (+61)</option>
            <option value="+81">Japan (+81)</option>
            <option value="+49">Germany (+49)</option>
            <option value="+33">France (+33)</option>
            <option value="+86">China (+86)</option>
            <option value="+971">United Arab Emirates (+971)</option>
            <option value="+94">Sri Lanka (+94)</option>
            <!-- Add more countries as needed -->
          </select> 
          <input type="phone" name="contact" pattern="[0-9]{10}" placeholder="Mobile Number" required>
          <br><br>
          New Password : <input type="password" name="new_password" id="pwd" pattern="(?=.+\d) (?=.+[a-z]) (?=.+\[A-Z]).{5-10}" required minlength="8">
          <br>
          (Suggest a strong password)
          <br><br>
          Confirm Password :<input type="password" name="confirm_password" required minlength="8"><br>
          <br>
          Enter your country /region : <input type="text" name="country" required><br>
          <br>
          Date of Birth : <input type="date" name="birth" required>
          <br>
          <br>
          Choose your gender <br>
          <input type = "radio" name="gender" value="male" required> Male <input type = "radio" name="gender" value="female"> Female <br>
          <br>
          <button class="register" type="submit" width = 200px >update</button>
          </h4>

        </form>
    </fieldset>

    <script>
        function validatePasswords() {
            var password = document.getElementById("pwd").value;
            var confirmPassword = document.getElementsByName("confirm_password")[0].value;

            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return false; 
            }
            return true; 
        }
        </script>

    <button onclick="returns()" style="display: block; margin: 10px auto ;" class="return">Return</button>


</body>



</html>


          

     





















