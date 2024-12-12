<?php 
    //strat the session
   session_start();
    //include the 
   include("config.php");
   //check user loged in by valid session
   if(!isset($_SESSION['valid'])){
    header("Location: home.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
    <!--js links-->
    <script src="js/index.js"></script>
    <script type="text/javascript" src="js/search1.js"></script>
    


    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="right-links">

            <?php 
            

            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM registertion WHERE Id=$id");
            
            //fetch the user details
            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['fname'];
                $res_Email = $result['email'];
                $res_id = $result['Id'];
                $res_pw = $result['npassword'];
                $res_con = $result['contact'];

            }
            
            ?>

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


            

            

        </div>
    </div>
    <main>

    <div class="background">




       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Hello <b><?php echo $res_Uname ?></b>, Welcome to Edu Flex</p>
            </div>
            
          </div>
          
       </div>
       </div>

    </main>

    <main class="programs">
            <div class="button-container">
            <a href="program.php"><button class="reso">Programs</button></a>
                <a href="resources.php"><button class="reso">Resources</button></a>
            </div>
        </main>

            </div>


<br><br>      
<hr>
<!--events-->



         <h1 class="topic">Live Events</h1>
        <main class="live-event-container">
            <a href="https://teams.live.com/meet/9374865603680?p=5FhacaJjHk5xIo2SJQ"><section class="live-event">
                <img src="images/live.png" alt="Live Event 1"></a>
                <h2>Live Event 1</h2>
                <p class="description">Join us for an exciting live event covering the latest in technology.</p>
            </section>

            
            <a href="https://teams.live.com/meet/9374865603680?p=5FhacaJjHk5xIo2SJQ"><section class="live-event"><img src="images/live.png" alt="Live Event 2"></a>
                <h2>Live Event 2</h2>
                <p class="description">Don't miss our second live event filled with expert talks and workshops.</p>
            
            </section>

            <a href="https://teams.live.com/meet/9374865603680?p=5FhacaJjHk5xIo2SJQ"><section class="live-event">
                <img src="images/live.png" alt="Live Event 3"></a>
                <h2>Live Event 3</h2>
                <p class="description">Get insights into the latest innovations and trends in the industry.</p>
            
            </section>

            <a href="https://teams.live.com/meet/9374865603680?p=5FhacaJjHk5xIo2SJQ"><section class="live-event">
                <img src="images/live.png" alt="Live Event 4"></a>
                <h2>Live Event 4</h2>
                <p class="description">Our final event will feature special guests and interactive sessions.</p>
            
            </section>
        </main>

        <hr>
        <h1 class="topic">Testimonials </h1>

<main class="testo-container">
    <a href=""><section class="testo"></a>
        <img src="">
        <h2>Summer Finn</h2>
        <p class="testo_description">I just wanted to share a quick note and let you know that you guys do a really good job. I'm glad I decided to work with you. It's really great how easy your websites are to update and manage. I never have any problem at all.</p>
    </section></a>

    <a href=""><section class="testo1"></a>
        <img src="">
        <h2>Devid luther</h2>
        <p class="testo_description">I just wanted to share a quick note and let you know that you guys do a really good job. I'm glad I decided to work with you. It's really great how easy your websites are to update and manage. I never have any problem at all.</p>
    </section></a>

    <a href=""><section class="testo2"></a>
        <img src="">
        <h2>Sophia leen</h2>
        <p class="testo_description">I just wanted to share a quick note and let you know that you guys do a really good job. I'm glad I decided to work with you. It's really great how easy your websites are to update and manage. I never have any problem at all.</p>
    </section></a>

   
</main>



 



        

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