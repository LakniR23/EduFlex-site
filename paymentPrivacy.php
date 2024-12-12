<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="css/term&con.css">
    <script type="text/javascript" src="js/search1.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    
   

    
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="home2.php"><img src="images/logo1.png" alt="EduFlex Logo" width="150px"></a>
            </div>
            <ul>
                <li><a href="home2.php">Home</a></li>
                <li><a href="aboutus2.php">About Us</a></li>
                <li><a href="program.php">Programs</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
            <div class="search-container">
            <input type="text" id="search-query" placeholder="Search">
            <button class="search-btn" onclick="performSearch()">Search</button>
</div>
<a href="edit.php?Id=$res_id" class="profile-link">Profile</a>
           <a href="logout.php?Id=$res_id"> <button class="log-out">Log Out</button></a>
        </div>
    </nav>
    <!-- Terms and Conditions Section -->
    <h1 class="topic">Payment Privacy Policy</h1>

    <div class="term-box">
        <div class="term-text">
            <p>Greetings Users,</p>
            <p>1. <strong>Payment Security: </strong> We use industry-standard encryption technologies to secure your payment information. However, you are responsible for safeguarding your login credentials and personal payment details. [Your Company Name] will not be liable for unauthorized transactions due to user negligence.</p>
            <p>2. <strong>Dispute Resolution: </strong> In the event of a payment dispute, you must contact us within [X] days of the transaction date. We will work with you to resolve the issue in accordance with our policies.</p>
            <p>3. <strong>Modifications to the Terms : </strong> We reserve the right to modify these terms at any time. Any changes will be posted on this page, and your continued use of our services will constitute acceptance of the updated terms.</p>
            <p>4. <strong>Payment and Fees:</strong> All payments made are non-refundable unless otherwise specified. In the event of a technical error or double charge, please contact our support team within [X] days, and we will process the refund as necessary.</p>
            <p>5. <strong>Refund Policy:</strong> All payments made are non-refundable unless otherwise specified. In the event of a technical error or double charge, please contact our support team within [X] days, and we will process the refund as necessary.</p>
            

            <!-- Accept or Decline Buttons -->

            <div class="term-btn">
                <button class="red-btn" onclick="accept()">Accept</button>
                <button class="gry-btn" onclick="decline()">Decline</button>
            </div>
            
        </div>
    </div>

     <!-- Footer Section -->
     <footer>
    <div class="footer-container">
        <div class="contact-info">
            <ul>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="term&con2.php">Terms and Conditions</a></li>
                <li><a href="privacy2.php">Privacy Policy</a></li>
                <li><a href="faq2.php">FAQ</a></li>
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
</body>

</html>