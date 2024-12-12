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

        <div class="content">
            <div class="description">
                <h2>Course in Coding and Computational Thinking(IT1040)</h2>

                The Course in Coding and Computational Thinking is designed to help educators introduce the fundamentals of programming and problem-solving to their students. With coding becoming an essential skill in today’s world, this course provides teachers with the tools and techniques to teach coding effectively, even if they have no prior experience in programming. The course focuses on building a foundational understanding of coding concepts, such as algorithms, variables, loops, and conditional statements, which are the building blocks of most programming languages.

                <br/>
                <br/>

                In addition to teaching coding syntax, the course places a strong emphasis on computational thinking—a method of solving problems that can be applied across various disciplines. Computational thinking involves breaking down complex problems into smaller, more manageable parts, recognizing patterns, and creating step-by-step solutions. This approach not only helps students develop their coding skills but also improves their logical reasoning, analytical thinking, and problem-solving abilities.

                <br/>
                <br/>

                Throughout the course, teachers will be introduced to a variety of tools and platforms designed to make coding accessible and fun for students of all ages. These may include block-based coding environments, such as Scratch, which allow students to create programs by dragging and dropping code blocks, as well as more advanced text-based languages like Python or JavaScript. By engaging students with interactive coding exercises, teachers can foster creativity and innovation in the classroom.

                <br/>
                <br/>

                Moreover, the course addresses how coding can be integrated into other subjects, such as math, science, and even art, making it a versatile skill that complements various areas of learning. By the end of the course, teachers will have gained the confidence to introduce coding into their curriculum and help students develop critical skills that are valuable in both academic and real-world contexts.
            </div>

            <div class="pricing">
                <button id="payButton">Pay $18.10</button>

                <script>
                    document.getElementById("payButton").addEventListener("click", function() {
                        var userConfirmed = confirm("Please confirm your payment of $18.10. Click OK to proceed.");

                        if (userConfirmed) {
                            window.location.href = "paymentPrivacy.php";
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