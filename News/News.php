<?php
    session_start();

        if (!isset($_SESSION['email'])) {
            header("Location: ../index.php");
            exit();
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="news.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="news.js" type="text/javascript" defer></script>
    <title>Document</title>
    
</head>
<body>
    
    <nav>
        <div class="wrapper">
           <div class="logo">SuperCars</div>
    
            <ul class="nav-links">
                    <li><a class="nav-link" href="../index.php">Home</a></li>
                    <li><a class="nav-link" href="../Cars/Cars.php">Shop</a></li>
                    <li><a class="nav-link">News</a></li>
                    <li><a class="nav-link" href="#Contact">Contact</a></li>
                    <?php
                                
                                if (isset($_SESSION['email'])) {
                                   
                                    if ($_SESSION['role'] == 'admin') {
                                        echo '<li><a class="nav-link" href="../Dashboard/dashboard.php">Dashboard</a></li>';
                                    }
                                    echo '<li><a class="nav-link" href="./Signin/logout.php">Log Out</a></li>';
                                } else {
                                    echo '<li><a class="nav-link" href="./Signin/SignIn.php">Sign In</a></li>';
                                }
                    ?>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
             </div>
        </div>
    </nav>

    <div class="newsHeader"></div>

    <div class="NewsBody">
        <div class="NewsHeading">
            <h1 class="newsbodyh1">Find</h1>
            <h1 class="newsbodyh1">Out</h1>
            <h1 class="newsbodyh1">More</h1>
            <h1 class="newsbodyh1">Enjoy</h1>
            <h1 class="newsbodyh1">The</h1>
            <h1 class="newsbodyh1">Latest</h1>
        </div>

        <div class="newsElement mobileElement">
            <img src="../assets/News/NewsElement.jpg" class="Element" alt="img" />
            <div class="newsMobile" style="width: 50%; height:100%; display: flex; flex-direction:column; justify-content: center; align-items:center;">
                <h1 style=" border-left:2px solid black; padding-left:10px; color: black; font-weight: 200; letter-spacing: 3px;">American Muscle</h1>
                <p style="width: 80%; text-align: center;">We are introducing the newest model in our company, coming in fast and in big muscles, find out very soon! </p>
            </div>
        </div>

        <div class="NewsHeading">
            <h1 class="newsbodyh1">Coming</h1>
            <h1 class="newsbodyh1">Soon</h1>
            <h1 class="newsbodyh1">Stay</h1>
            <h1 class="newsbodyh1">Tuned</h1>
            <h1 class="newsbodyh1">Be</h1>
            <h1 class="newsbodyh1">Ready</h1>
        </div>

        <div class="newsElement mobileElement2">
            <img src="../assets/News/ElementNews.jpg" class="Element" alt="img" />
            <div class="newsMobile" style="width: 50%; height:100%; display: flex; flex-direction:column; justify-content: center; align-items:center;">
                <h1 style=" border-left:2px solid black; padding-left:10px; color: black; font-weight: 200; letter-spacing: 3px;">Panamera</h1>
                <p style="width: 80%; text-align: center;">We are introducing the newest model in our company, it's coming to join the collection, coming soon! </p>
            </div>
        </div>
    </div>

    <div class="wrapper-header">
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <div class="carousel">
                <img src="../assets/News/Image1.jpg" alt="img" draggable="false">
                <img src="../assets/News/Image2.jpg" alt="img" draggable="false">
                <img src="../assets/News/Image3.jpg" alt="img" draggable="false">
                <img src="../assets/News/Image4.jpg" alt="img" draggable="false">
                <img src="../assets/News/Image5.jpg" alt="img" draggable="false">
                <img src="../assets/News/Image6.jpg" alt="img" draggable="false">
                <img src="../assets/News/NewsElement.jpg" alt="img" draggable="false">
                <img src="../assets/News/SliderBMW.jpg" alt="img" draggable="false">
                <img src="../assets/News/SliderImage3.jpg" alt="img" draggable="false">
                <img src="../assets/News/SliderImage4.jpg" alt="img" draggable="false">
                <img src="../assets/News/SliderImage5.jpg" alt="img" draggable="false">
            </div>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
    </div>

    <footer id="Contact">
                    <div class="contact-content">
                        <h1>Get in touch</h1>
                
                        <div class="contact">
                            <div class="cover">
                                <h3>Email Address</h3>
                                <p>hello@someone.com</p>
                            </div>
                    
                            <div class="cover">
                                <h3>Mailing Address</h3>
                                <p>123 Anywhere, Any City</p>
                            </div>
                
                            <div class="cover">
                                <h3>Phone Number</h3>
                                <p>(+383) 044-100-200</p>
                            </div>
                            
                        </div>
                        
                        
                    </div>
                    <p>Copyright © 2023 SuperCars Inc. All rights reserved.</p>
    </footer>
    
</body>

</html>