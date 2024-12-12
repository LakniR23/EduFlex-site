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
         <!--link the css file with the program css-->
         <link rel="stylesheet" href="css/program.css">
         <script type="text/javascript" src="js/search1.js"></script>
        <!--font awesome link for the header is obtained from cdnjs.com site. then type font awesome. them copy the htl code inside </>-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        <div id="content">
            <h2>Our Courses</h2>

            <div class="explaination">
                <p>Learning IT is important for teachers i today's digital age. Technology has changed the educational environment making it essential for the teachers to have a considerable amount of profciency regarding IT. These courses are equiped for the teacher to grab skills in areas such as sotware development, digital communication and online teaching platforms. Witha strong knowlege of IT, teachers can prepare themselves to engage with the students and provide an efficient teaching i this competitive rapidly involving educational background.
                <br/>
                <br/>
                It is not only about staying with current techology but also transforming teachers to educate engage their students. With the digitalization, students tend to have skills better than the teachers hence it is crucial for a teacher to have a considerable knowlwdge about IT. 
                </p>
            </div>
            
            <br/>
            <br/>

            <div class="courses">
                <div class="course1">
                    <div class="details"> 
                        <div class="detail1">
                            <h4>Diploma in Educational Technology(IT1010)</h4>

                            This courses focuses on combining  digital tools and technologies into classroom environment. It covers e-learing platforms, interactive whiteboards, and tools to improve student engagement in both physical and virtual environment.
                        </div>

                        <div class="btn">
                        <a href="course1.php"><button>View More</button></a>
                        </div>
                    </div>
                </div>

                <div class="course2">
                    <div class="details">
                        <div class="detail2">
                            <h4>Course in Cybersecurity for Educators(IT1020)</h4>

                            This course equips teachers with knowledge on protecting digital systems and studet data from cyber threats. It covers vital cybersecurity practuces like password management,encryption, and secure communication for schools.
                    
                        </div>
                        
                        <div class="btn">
                        <a href="course2.php"><button>View More</button></a>
                        </div>
                    </div>
                </div>

                <div class="course3">
                    <div class="details">
                        <div class="detail3">
                            <h4>Diploma in IT Project Management for Educators(IT1030)</h4>

                            This program teaches how to manage IT projects such as implementing new learning technologies in schools. It covers project planning, risk management, and collaboration techniques to ensure successful integration of technology in education.

                        </div>
                        
                        <div class="btn">
                        <a href="course3.php"><button>View More</button></a>
                        </div>
                    </div>
                </div>

                <div class="course4">
                    <div class="details">
                        <div class="detail4">
                            <h4>Course in Coding and Computational Thinking(IT1040)</h4>

                            Designed to help teachers introduce coding to their students, this course covers basic programming concepts and problem solving strategies. It also highlights computational thinking to develop logical reasoning and analytical skills.
                        </div>
                        
                        <div class="btn">
                        <a href="course4.php"><button>View More</button></a>
                        </div>
                    </div>
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