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
                <a href="home.php"><img src="images/logo1.png" alt="EduFlex Logo" width="150px"></a>
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
                <h2>Diploma in Educational Technology(IT1010)</h2>

                The Diploma in Educational Technology equips teachers with the knowledge and skills to effectively integrate digital tools into their teaching practices. In today's digital age, technology is transforming the way education is delivered. This course addresses the growing need for educators to become proficient in the use of modern technologies, such as e-learning platforms, interactive whiteboards, and virtual teaching tools, which help to create more dynamic and engaging learning environments.
                 
                <br/>
                <br/> 

                Through this diploma, educators will explore how to apply these technologies in real-world classroom settings, both physical and virtual. The course covers instructional design principles, allowing teachers to tailor learning experiences to different student needs and learning styles. By leveraging technology, educators can improve student engagement, streamline assessment methods, and facilitate collaboration among students and teachers.

                <br/>
                <br/>

                One of the key aspects of the program is its focus on the pedagogical implications of technology. Teachers will learn not only how to use the tools but also how to integrate them meaningfully into their curriculum to enhance the learning experience. They will also study the impact of emerging technologies such as artificial intelligence, gamification, and virtual reality in education, preparing them for future advancements in the field.

                <br/>
                <br/>

                Moreover, the diploma emphasizes the ethical and professional use of educational technology. Teachers will be trained in issues related to online privacy, digital ethics, and the responsible use of digital resources. By the end of the course, participants will have developed the confidence to implement various educational technologies effectively, helping them prepare their students for the challenges of a technology-driven world.
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
                <a href="tel:+0112220832">011-2220832</a>
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