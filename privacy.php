<!DOCTYPE html>
<html>

<head>
    <!--to specify the character encoding of the document-->
    <meta charset="UTF-8">
    <!--to match the the device's width and set initial zoom level to 1.0-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--enter the logo as icon on the tab-->
    <link rel="icon" href="/images/logo3.png">
    <!--name of the tab-->
    <title>Edu Flex</title>

    <!--link the css file-->
    <link rel="stylesheet" href="css/privacy.css">
    <!--link the css file of footer-->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <script type="text/javascript" src="js/search1.js"></script>

    <!--font awesome link for the header is obtained from cdnjs.com site. then type font awesome. them copy the htl code inside </>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="home2.php"><img src="images/logo1.png" alt="EduFlex Logo" width="150px"></a>
            </div>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="programb.php">Programs</a></li>
                <li><a href="contactb.php">Contact us</a></li>
            </ul>
            <div class="search-container">
            <input type="text" id="search-query" placeholder="Search">
            <button class="search-btn" onclick="performSearchL()">Search</button>
</div>
            
           <a href="login.php"> <button class="log-out">Login</button></a>
        </div>
    </nav>

    <!--topic-->
    <h1 class="topic">Privacy Policy</h1>

    <!--description-->
    <h2 class="intro">At Edu Flex, we value and respect your privacy. This Privacy Policy outlines how we collect, use,
        disclose, and protect your personal information when you access or use our online teacher training platform.
    </h2>

    <!--add details-->
    <h3 class="info">
        1. Information We Gather<br><br>
        We collect the following types of information to provide and improve our services: <br>

        Personal Information: Name, email address, phone number, and other contact details when you register for an
        account or enroll in a course. <br>
        Payment Information: Billing details and payment methods when you purchase courses or services.<br>
        Usage Information: Data about how you use our platform, including pages visited, courses viewed or enrolled in,
        and time spent on the site.<br>
        Device Information: Information about the device you use to access our platform, such as IP address, browser
        type, and operating system.
        <br><br>
        2. How We Use Your Information<br><br>
        We use the collected information for the following purposes:<br>
        To create and manage your account.<br>
        To deliver and improve our courses and services.<br>
        To process payments for course enrollments.<br>
        To send important updates, notifications, and promotional content.<br>
        To analyze and enhance user experience by tracking usage patterns.<br>
        To comply with legal obligations and ensure the security of our platform.
        <br><br>
        3. Information Sharing and Disclosure<br><br>
        We do not share your personal information with third parties except in the following situations:
        <br>
        Service Providers: We may share your information with trusted third-party service providers who assist us with
        payment processing, hosting, and analytics.<br>
        Legal Compliance: If required by law or in response to a valid request from a government or legal authority, we
        may disclose your information.<br>
        Business Transfers: In the event of a merger, acquisition, or sale of our business, your personal information
        may be transferred as part of the transaction.
        <br><br>
        4. Data Security<br><br>
        We implement industry-standard security measures to protect your personal information from unauthorized access,
        loss, or misuse. However, no method of data transmission over the internet is completely secure, and we cannot
        guarantee absolute security.
        <br><br>
        5. Your Rights<br><br>
        You have the right to:
        <br>
        Access and review the personal information we hold about you.<br>
        Request corrections or updates to your personal information.<br>
        Request deletion of your personal data, subject to certain legal obligations.<br>
        Opt out of receiving promotional emails by following the unsubscribe instructions in those emails.<br>
        <br><br>
        6. Cookies and Tracking Technologies<br><br>
        We use cookies and similar technologies to collect information about your browsing behavior on our website. You
        can choose to disable cookies through your browser settings, but this may affect your ability to access certain
        features of the platform.
        <br><br>
        7. Contact Us<br><br>
        If you have any questions or concerns about our Privacy Policy or the handling of your personal information,
        please contact us at [eduflex@gmail.com].
    </h3>
    <br><br>
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