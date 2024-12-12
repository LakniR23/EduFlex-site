<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Meta tags for proper character encoding and responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tab icon -->
    <link rel="icon" href="images/logo1.png">

    <!-- Page title -->
    <title>FAQ page</title>

    <!-- CSS links -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/adminadd.css">
    <link rel="stylesheet" href="css/faq.css">
    <script type="text/javascript" src="js/search1.js"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        

        /* FAQ container */
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Center the page title */
        h1 {
            text-align: center;
            font-size: 36px;
            color: #333;
            margin-bottom: 30px;
            font-weight: bold;
        }

        /* FAQ question styling */
        .faq-question {
            background-color:darkgrey;
            color: white;
            padding: 15px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: background-color 0.3s;
        }

        .faq-question:hover {
            background-color: #003d80;
        }

        
        .faq-answer {
            display: none;
            background-color: #f9f9f9;
            padding: 15px;
            margin-bottom: 20px;
            border-left: 4px solid #0056b3;
            border-radius: 0px 0px 8px 8px;
        }

        /* FAQ answer text */
        .faq-answer p {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
            margin: 0;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 28px;
            }

            .faq-question {
                font-size: 18px;
            }

            .faq-answer p {
                font-size: 16px;
            }
        }
    </style>

        




</head>

<body>
    <!-- Navigation Bar -->
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

    <br>
    <br>

    <!-- Frequently Asked Questions -->
    <div class="container">
    <h1>Frequently Asked Questions</h1>

    <div class="faq">
        <div class="faq-question">What is the duration of the teacher training program?</div>
        <div class="faq-answer">
            <p>The teacher training program lasts for six months, with a combination of online and in-person sessions.</p>
        </div>

        <div class="faq-question">How can I enroll in a course?</div>
        <div class="faq-answer">
            <p>You can enroll in a course through our website. Navigate to the Programs section, select your desired course, and follow the enrollment instructions.</p>
        </div>

        <div class="faq-question">What payment methods are accepted?</div>
        <div class="faq-answer">
            <p>We accept various payment methods including credit/debit cards, PayPal, and bank transfers.</p>
        </div>

        <div class="faq-question">Is there any financial aid available?</div>
        <div class="faq-answer">
            <p>Yes, we offer financial aid to eligible students. Please contact our support team for more details on how to apply.</p>
        </div>

        <div class="faq-question">How can I get a refund?</div>
        <div class="faq-answer">
            <p>You have to contact the support team.</p>
        </div>

    
    </div>
</div>

<script>
   
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach((question) => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';
        });
    });
</script>

<br><br>


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

    <script src="faq.js"></script>
</body>

</html>
