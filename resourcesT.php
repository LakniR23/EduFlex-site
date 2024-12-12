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

    <!--link the css file with the header css-->
    <link rel="stylesheet" href="css/resources.css">
    <!--link the css file with the footer css-->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <script type="text/javascript" src="js/search1.js"></script>

    <!--font awesome link for the header is obtained from cdnjs.com site. then type font awesome. them copy the htl code inside </>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
 <!-- Navigation Bar -->
 <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="homeT.php"><img src="images/logo1.png" alt="EduFlex Logo" width="150px"></a>
            </div>
            <ul>
                <li><a href="homeT.php">Home</a></li>
                <li><a href="aboutusT.php">About Us</a></li>
                <li><a href="programT.php">Programs</a></li>
                <li><a href="contactT.php">Contact us</a></li>
            </ul>
            <div class="search-container">
            <input type="text" id="search-query" placeholder="Search">
            <button class="search-btn" onclick="performSearchT()">Search</button>
</div>
            
           <a href="home.php"> <button class="log-out">Log Out</button></a>
        </div>
    </nav>


    <!--topic-->
    <h1 class="topic">Resources</h1>

    <!--add details-->


    <div class="resource-card">
        <img src="images/blogs.jpg" alt="Image 1">
        <h2>Blogs</h2>
        <p>Use Eduflex to discover the most recent developments in learning, knowledgeable concepts, and instructional
            ideas. Eduflex provides useful guidance and resources to help instructors at all levels improve their
            abilities and promote student achievement, ranging from cutting-edge digital tools to classroom management
            suggestions. Keep yourself up to date on developments in the field of education and stay motivated and
            informed.</p>

            <a href="https://drive.google.com/drive/u/1/folders/1-xP0VwirYTX6vAuMIzdRTLnCic80kw3p"
            target="_blank"><button>Learn More →</button></a>
    </div>

    <div class="resource-card">
        <img src="images/online.webp" alt="Image 2">
        <h2>Online Tutorials</h2>
        <p>Teachers can improve their proficiency with digital classrooms by using the extensive, step-by-step
            instructions provided by Eduflex's online courses. From creating virtual learning environments to making
            good use of interactive tools, these materials cover a wide range of topics. The tutorials, which are
            intended for educators with varying levels of experience, offer useful tactics, illustrated examples, and
            advice on enhancing virtual instruction and raising student involvement.</p>
            <a href="https://youtube.com/playlist?list=PLjbXjDdSp7vcVDSFY6D6AQf4LFSVO1i3r&si=uFRKJv2MMkNp7X_L"
            target="_blank"><button>Get Started →</button></a>
    </div>

    <div class="resource-card">
        <img src="images/research2.jpg" alt="Image 3">
        <h2>Research Documents</h2>
        <p>Researches for online teaching websites provide educators with evidence-based insights and studies on
            effective digital pedagogy. These resources explore the latest trends, tools, and methodologies in online
            education, helping teachers stay informed about best practices. By integrating research findings, educators
            can enhance their teaching strategies, improve student outcomes, and foster a more engaging online learning
            environment.</p>
            <a href="https://drive.google.com/drive/u/1/folders/1uyfj_JBusNUkFLBqPHUcL4c4t0Xsyos-"
            target="_blank"><button>Learn More →</button></a>
    </div>
</body>

<!-- Footer Section -->
<footer>
    <div class="footer-container">
        <div class="contact-info">
            <ul>
                <li><a href="contactT.php">Contact us</a></li>
                <li><a href="term&conT.php">Terms and Conditions</a></li>
                <li><a href="privacyT.php">Privacy Policy</a></li>
                <li><a href="faqT.php">FAQ</a></li>
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