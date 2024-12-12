<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for proper character encoding and responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tab icon -->
    <link rel="icon" href="images/logo1.jpg">

    <!-- Page title -->
    <title>Payment</title>

    <!-- CSS links -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/payment.css">
    <script type="text/javascript" src="js/search1.js"></script>

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

    <!-- Payment Section -->
    <div class="payment-section">
    <h1 class="payment-main">Payment Details</h1>
    <form class="payment-form" action="paymentAddDatabase.php" method="post">
        

        <div class="form-group">
            <label for="course-id">Course ID :</label>
            <input type="text" id="course-id" name="course-id" required placeholder="ITxxxx">
        </div>
    
        <div class="form-group">
            <label for="cardholder-name">Cardholder Name:</label>
            <input type="text" id="cardholder-name" name="cardholder-name" required >
        </div>

        <div class="form-group">
            <label for="card-number">Card Number:</label>
            <input type="text" id="card-number" name="card-number" placeholder="xxxx-xxxx-xxxx-xxxx" required>
        </div>

        <div class="form-group">
            <label for="expiry-date">Expiry Date:</label>
            <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required>
        </div>

        <div class="form-group">
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>
        </div>

        <div class="form-group">
            <label for="billing-address">Billing Address:</label>
            <input type="text" id="billing-address" name="billing-address" required>
        </div>

        <div class="form-group">
            <label for="zip-code">Zip Code:</label>
            <input type="text" id="zip-code" name="zip-code" required>
        </div>

        <div class="form-group">
            <label for="doller">Amount:</label>
            <input type="text" id="amount" name="amount" required>
        </div>



        <div style="display: flex; justify-content: center; align-items: center; padding-top: 10px;">
            <button type="submit" class="submit-btn">Pay</button>
        </div>
    </form>
</div>
</body>



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
