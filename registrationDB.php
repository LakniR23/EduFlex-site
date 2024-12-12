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

   
    <!--font awesome link for the header is obtained from cdnjs.com site. then type font awesome. them copy the htl code inside </>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!--Details of navigation bar -->
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="home2.php"><img src="images/logo1.png" alt="EduFlex Logo" width="150px"></a>
            </div>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutus2.php">About Us</a></li>
                <li><a href="program.php">Programs</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
            <div class="search-container">
    <input type="text" id="search-query" placeholder="Search..">
    <button class="search-btn" onclick="performSearch()">Search</button>
</div>
            
<a href="login.php"> <button class="log-out">Login</button></a>
        </div>
    </nav>


    <!--details of data base-->

    <br><br>

    <fieldset>
       
       <form method="post" action="reginsert.php" onsubmit="return validatePasswords();">

          <h1>Registration Page</h1>
          <hr>
          <h3>New User</h3>
          <h4 class="description">Welcome to the EDUFLEX Registration page. <br>To commence kindly furnish your fundemental details.</h4>
          <h4 class="info">First Name : <input type="text" name="first_name" required>  Last Name : <input type="text" name="last_name" required><br>
          <br>
          Email : <input type="email" name="email" pattern="[a-z0-9._%+-] +@ [a-z0-9.-.[a-z]{2,3}" placeholder="Email" required><br>
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
          Terms and Conditions <input type="checkbox" name="terms" required><br>
          <br>
          I am not a robot <input type="checkbox" name="robot" required><br>
          <br>
          
          <input type="reset" class="reset"> <br>
          <br>
          <button class="register" type="submit" width = 200px >Register</button>
          </h4>

        </form>
    </fieldset>
    <br><br>

    <!--js for validate password-->
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

</body>


<!-- Footer Section -->
<footer>
    <div class="footer-container">
        <div class="contact-info">
            <ul>
                <li><a href="contactb.php">Contact us</a></li>
                <li><a href="term&con.php">Terms and Conditions</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
            <p>
                <a href="mailto:eduflex@gmail.com">eduflex@gmail.com</a> |
                <a href="tel:+011xxxxxxx">011-2220832</a>
            </p>
            <div class="social-icons">
                <a href="https://www.facebook.com/#:~:text=Log%20into%20Facebook%20to%20start%20sharing%20and%20connecting%20with%20your"><img style="width:20px" src="images/fb-icon.png"  alt="Facebook"></a>
                <a href="https://www.linkedin.com/in/navoda-dasun-23b63326a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><img style="width:20px" src="images/linkedin-icon.jpg" alt="LinkedIn"></a>
                <a href="https://www.youtube.com/@eduflexerp8063"><img style="width:20px" src="images/youtube-icon.png" alt="YouTube"></a>
                <a href="mailto:eduflex@gmail.com"><img style="width:20px" src="images/email-icon.jpg" alt="Email"></a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p><b>&copy; 2024 EduFlex. All rights reserved.</b></p>
    </div>
</footer>


</html>


          

     





















