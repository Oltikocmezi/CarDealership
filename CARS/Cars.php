<?php
      session_start();

      if (!isset($_SESSION['email'])) {
         header("Location: ../index.php");
         exit();
      }


      $servername = "localhost";
      $db = "autoubt";
      $username = "root";
      $password = "";

      try{
         $conn = new PDO("mysql:host=$servername; dbname=$db", $username, $password, array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));

         
      }catch(PDDException $e){
         echo "Lidhja Deshtoi: " . $e->getMessage();
      }

   
   try {
      $stmt = $conn->prepare("SELECT * FROM cars");
      $stmt->execute();
      $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
   } catch (PDOException $e) {
      echo 'Error fetching cars: ' . $e->getMessage();
      exit();
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cars.css">
    
</head>
<body>
 
  
    <nav>
        <div class="wrapper">
         <div class="logo">SuperCars</div>
    
            <ul class="nav-links">
                            <li><a class="nav-link" href="../index.php">Home</a></li>
                            <li><a class="nav-link" href="../Cars/Cars.php">Shop</a></li>
                            <li><a class="nav-link" href="../News/News.php">News</a></li>
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
    
    
    <header id="Home">
            <div class="content">
                <h1>Do You Want To Recive</h1>
                <h1>Special Offers?</h1>
                <p>Be the first to receive all the information about our products and our new cars.</p>
            </div>
            <div class="headerImg"></div>
    
    </header>

    
    <section class="carsSection">
         
         <div class="titleLogo">
            <h1>Choose The Best Car</h1>
            <img src="../assets/Cars/logo1.png" />
         </div>
         
         <div class="CarImg"></div>
         
         <div class="info">
            <div class="info1">
               <img src="../assets/Cars/dollar.png" alt="img">
               <h1>180K</h1>
               <p>Price</p>
            </div>
            <div class="info2">
               <img src="../assets/Cars/speed-up-lineWhite.png" alt="img">
               <h1>300km/h</h1>
               <p>Speed</p>
            </div>
            <div class="info3">
               <img src="../assets/Cars/account-circle-line.png" alt="img">
               <h1>1</h1>
               <p>Owners</p>
            </div>
         </div>
    </section>

    
    <section class="about">
         
         <div class="about1">
            <div class="innerAbout1">
               <img src="../assets/Cars/about.png" alt="image">
            </div>
               <div class="innerAbout2">
                  <h1>Machines With </br> Future Technology</h1>
                  <p>See the future with high-performance cars produced by fameous brands.
                     They feature futuristic builds and designs with new and innovative platforms 
                     that last a long time. Now with the newest technology on electric batterys that give 
                     extra help to the car adding an amount of power to the engine, you can find these Cars
                     even better than the old versions.
                  </p>
               </div>
         </div>
         
         <div class="about2">
            <h1>Choose Your Car </br> Of The Porche Brand</h1>
         </div>

    </section>

    
    <section class="products">
      <div class="productsItems">
         <?php foreach ($cars as $car): ?>
               <div class="product">
                  <h1><?= $car['car_name']; ?></h1>
                  <p><?= $car['description']; ?></p>
                  <img class="carImage" src="<?= $car['image_path']; ?>" alt="image">

                  <div class="iconsTopDiv">
                     <h1><img src="../assets/Cars/account-circle-line.png" alt="image"><?= $car['owners']; ?></h1>
                     <h1><img src="../assets/Cars/speed-up-lineWhite.png" alt="image"><?= $car['speed']; ?> Km/h</h1>
                  </div>

                  <h1><img src="../assets/Cars/dollar.png" alt="image"><?= number_format($car['price'], 2); ?></h1>
               </div>
         <?php endforeach; ?>
      </div>
   </section>

    
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
    


    <script>
         const hamburger = document.querySelector(".hamburger");
         const navLinks = document.querySelector(".nav-links");


            hamburger.addEventListener("click", () =>{
            hamburger.classList.toggle("active");
            navLinks.classList.toggle("active");
         })

         document.querySelector(".nav-link").forEach(n => n.addEventListener
            ("click", () => {
               hamburger.classList.remove("active");
               navLinks.classList.remove("active");
            }))
    </script>
</body>
</html>