<!DOCTYPE html>
<html>
    <head>
        <!--to specify the character encoding of the document-->
        <meta charset="UTF-8">
        <!--to match the the device's width and set initial zoom level to 1.0-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--enter the logo as icon on the tab-->
        <link rel="icon" href="images/logo1.png">
        <!--name of the tab-->
        <title>Edu Flex</title>
        <!--link the css file with the header css-->
        <link rel="stylesheet" href="css/header.css">
        <!--link the css file with the footer css-->
        <link rel="stylesheet" href="css/footer.css">
        <!--link the css file with the courses css-->
        <link rel="stylesheet" href="css/courses.css">
        <!--font awesome link for the header is obtained from cdnjs.com site. then type font awesome. them copy the htl code inside </>-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script type="text/javascript" src="js/search1.js"></script>
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
            <button class="search-btn" onclick="performSearch()">Search</button>
</div>
            
           <a href="login.php"> <button class="log-out">Login</button></a>
        </div>
    </nav>



        <div class="content">
            <div class="description">
                <h2>Course in Cybersecurity for Educators(IT1020)</h2>

                The Course in Cybersecurity for Educators is designed to address the critical need for digital security in the educational environment. As classrooms and schools increasingly rely on technology for both instruction and administration, the risk of cyber threats becomes a significant concern. This course provides teachers with essential knowledge and strategies for protecting their school's digital infrastructure, student data, and personal information from cyber-attacks.

                <br/>
                <br/>

                The curriculum includes key topics such as password management, encryption, secure file sharing, and phishing awareness, all of which are fundamental to maintaining a secure digital environment. Teachers will also learn how to identify and respond to potential cyber threats, including malware, ransomware, and hacking attempts. By understanding the various forms of cyber threats, educators can help prevent data breaches that could harm students or compromise sensitive information.

                <br/>
                <br/>

                Additionally, the course emphasizes the importance of teaching students about cybersecurity. Educators will learn how to incorporate lessons on online safety, responsible internet use, and digital citizenship into their classrooms. This knowledge empowers students to protect themselves from online dangers and fosters a culture of digital responsibility in the school environment.

                <br/>
                <br/>

                Furthermore, the course addresses legal and ethical issues related to cybersecurity in schools. Teachers will become familiar with data protection laws, such as the General Data Protection Regulation (GDPR) and the Family Educational Rights and Privacy Act (FERPA), ensuring that their practices comply with legal standards. By the end of the course, teachers will not only safeguard their own classrooms but also contribute to creating a safer digital learning space for all students and staff.
            </div>

            <div class="pricing">
                <button id="payButton">Enroll</button>

                <script>
                    document.getElementById("payButton").addEventListener("click", function() {
                        var userConfirmed = confirm("Log into Edu Flex to proceed!");

                        if (userConfirmed) {
                            window.location.href = "login.php";
                        }
                    }); 
                </script>
            </div>
        </div>

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
    </body>
</html>