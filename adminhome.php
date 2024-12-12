<!DOCTYPE html>
<html lang="en">

<head>
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
    <link rel="stylesheet" href="css/adminhome.css">

    <!-- JS links -->
    <script src="js/index.js"></script>
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
                <a href="home.php"><img src="images/logo1.png" alt="EduFlex Logo" width="150px"></a>
            </div>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="program.php">Programs</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
            <div class="search-container">
            <input type="text" id="search-query" placeholder="Search">
            <button class="search-btn" onclick="performSearch()">Search</button>
</div>
            
           <a href="logout.php?Id=$res_id"> <button class="log-out">Log Out</button></a>
        </div>
    </nav>
    <!-- End of Navigation Bar -->

    <!-- Admin Dashboard Section -->
    <div class="admin-dashboard">
        <h2>Admin Dashboard</h2>

        <div class="control-grid">
            <!-- Admin Control Section -->
            <div class="control-section">
                <h3>Admin control</h3>
                <p>Manage admin by viewing, adding, updating, or removing them from the system.</p>
                <div class="button-group">
                    <a href="adminViewDataBase.php"><button class="view">View</button></a>
                    <a href="adminadd.php"><button class="add">Add</button></a>
                    <a href="AdminUpdate.php"><button class="update">Update</button></a>
                    <a href="AdminDelete.php"><button class="remove">Remove</button></a>
                </div>
            </div>

            <!-- User Control Section -->
            <div class="control-section">
                <h3>User control</h3>
                <p>Manage Users by viewing, adding, updating, or removing them from the system.</p>
                <div class="button-group">
                    <a href="reg_read.php"><button class="view">View</button></a>
                    <a href="reg_updateDB.php"><button class="update">Update</button></a>
                    <a href="reg_deleteDB.php"><button class="remove">Remove</button></a>
                </div>
            </div>

            <!-- Payment Control Section -->
            <div class="control-section">
                <h3>Payment control</h3>
                <p>Manage Payments by viewing, updating, or removing them from the system.</p>
                <div class="button-group">
                    <a href="paymentread.php"><button class="view">View</button></a>
                    <a href="paymentstatus.php"><button class="update">Update</button></a>
                    <a href="paymentdelete.php"><button class="remove">Refund</button></a>
                </div>
            </div>

            <!-- Lecturer Control Section -->
            <div class="control-section">
                <h3>Lecturer control</h3>
                <p>Manage lecturers by viewing, adding, updating, or removing them from the system.</p>
                <div class="button-group">
                    <a href="teacherViewDataBase.php"><button class="view">View</button></a>
                    <a href="teacherAdd.php"><button class="add">Add</button></a>
                    <a href="teacherUpdate.php"><button class="update">Update</button></a>
                    <a href="teacherDelete.php"><button class="remove">Remove</button></a>
                </div>
            </div>

            <!-- Support Control Section -->
            <div class="control-section">
                <h3>Support control</h3>
                <p>Manage support by viewing, updating, or removing them from the system.</p>
                <div class="button-group">
                    <a href="supportViewDatabase.php"><button class="view">View</button></a>
                    <a href="update.php"><button class="update">Update</button></a>
                    <a href="remove.php"><button class="remove">Remove</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Admin Dashboard -->

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
                    <a href="tel:+011xxxxxxx">011-xxxxxxx</a>
                </p>
                <div class="social-icons">
                    <a href="#"><img style="width:20px" src="images/fb-icon.png" alt="Facebook"></a>
                    <a href="#"><img style="width:20px" src="images/linkedin-icon.jpg" alt="LinkedIn"></a>
                    <a href="#"><img style="width:20px" src="images/youtube-icon.png" alt="YouTube"></a>
                    <a href="#"><img style="width:20px" src="images/email-icon.jpg" alt="Email"></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p><b>&copy; 2024 EduFlex. All rights reserved.</b></p>
        </div>
    </footer>
    <!-- End of Footer Section -->
</body>

</html>
