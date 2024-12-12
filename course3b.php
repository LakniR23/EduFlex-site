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
                <h2>Diploma in IT Project Management for Educators(IT1030)</h2>

                The Diploma in IT Project Management for Educators focuses on providing teachers with the tools and knowledge to manage technology-driven projects in educational settings. As schools increasingly adopt new technologies, there is a growing demand for educators who can lead the integration of these technologies into the learning environment effectively. This program trains educators to handle the complexities of implementing IT projects, such as the deployment of new software, the integration of hardware, or the development of e-learning platforms.

                <br/>
                <br/>

                Participants will learn the fundamentals of project management, including planning, executing, and closing projects within an educational context. Topics covered include project scope, time management, budgeting, risk management, and stakeholder communication. Educators will also explore best practices for collaborating with IT professionals, administrators, and other stakeholders to ensure the successful completion of projects on time and within budget.

                <br/>
                <br/>

                The course emphasizes practical applications by using case studies and real-world scenarios. For instance, educators might work on projects that involve integrating digital learning tools into a school's curriculum or launching a school-wide IT infrastructure upgrade. By applying project management methodologies like Agile and Waterfall, educators will be prepared to handle the challenges that arise during project execution and adjust strategies as needed.

                <br/>
                <br/>

                Furthermore, the diploma covers leadership and team management skills essential for driving IT projects forward. Educators will learn how to motivate their teams, delegate tasks, and solve problems in a collaborative and efficient manner. The course also explores the importance of evaluation and feedback in project management, ensuring that educators can assess the effectiveness of their projects and make necessary improvements. By the end of the program, participants will be capable of leading IT projects that significantly enhance the educational experience.
            </div>

            <div class="pricing">
                <button id="payButton">Pay $ 20.55</button>

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