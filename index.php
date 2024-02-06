<?php
    session_start();
?>


<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Car Website</title>
            <link rel="stylesheet" href="style.css">
        </head>
        
        <body>
            <nav>
                <div class="wrapper">
                    <div class="logo">SuperCars</div>
            
                        <ul class="nav-links">
                                <li><a class="nav-link" href="#Home">Home</a></li>
                                <li><a class="nav-link" href="./Cars/Cars.php">Shop</a></li>
                                <li><a class="nav-link" href="./News/News.php">News</a></li>
                                <li><a class="nav-link" href="#Contact">Contact</a></li>
                                <?php
                                    
                                    if (isset($_SESSION['email'])) {
                                        
                                        if ($_SESSION['role'] == 'admin') {
                                            echo '<li><a class="nav-link" href="./Dashboard/dashboard.php">Dashboard</a></li>';
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
                        <h1>Let's get you</h1>
                        <h1>on the road</h1>
                    </div>
            
            </header>
            
                <div class="section1" id="Model">
                    <div class="flex">
                    
                            <div class="container-text">
                                <h1>
                                    Micharlet<br />
                                    Mission
                                </h1>
                            </div>
                            
                            <div class="container container1"></div>
                    </div>
                
                    <div class="flex">
                            
                        <div class="container container2"></div>
                            
                            <div class="container-text">
                                <p>
                                    So how did the classical Latin become so incoherent? According to McClintock,
                                    a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide 
                                    placeholder text to mockup various fonts for a type specimen book.
                                    It's difficult to find examples of lorem ipsum in use before Letraset made it popular as adummy
                                    text in the 1960s, although McClintock says he remembers coming across the lorem ipsum passage
                                    in a book of old metal type samples.
                                </p>
                            </div>

                    </div>
                </div>
            
               
                <div class="section2" id="Offers">
                    <div class="info">
                        <h1>Current Offers</h1>
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                        <p>
                            Lorem ipsum, or lipsum as it is sometimes known, is dummy text used 
                            in laying out print, graphic or web designs. The passage is 
                            attributed to an unknown typesetter in the 15th century who is 
                            thought to have scrambled parts of Cicero's De Finibus Bonorum et 
                            Malorum for use in a type specimen book. It usually begins with:
                        </p>
                
                        <p>
                            The passage experienced a surge in popularity during the 1960s when 
                            Letraset used it on their dry-transfer sheets, and again during the 
                            90s as desktop publishers bundled the text with their software. 
                            Today it's seen all around the web; on templates, websites, 
                            and stock designs. Use our generator to get your own, or read on for 
                            the authoritative history of lorem ipsum.
                        </p>
                
                        <p>
                            Until recently, the prevailing view assumed lorem ipsum was born 
                            as a nonsense text. “It's not Latin, though it looks like it, 
                            and it actually says nothing,” Before & After magazine answered 
                            a curious reader, “Its words loosely approximate the frequency with 
                            which letters occur in English, which is why at a glance it looks 
                            pretty real.” As Cicero would put it, “Um, not so fast.”
                            The placeholder text, beginning with the line “Lorem ipsum dolor sit 
                            amet, consectetur adipiscing elit”, looks like Latin because in its 
                            youth, centuries ago, it was Latin.
                        
                        </p>
                    </div>
            
                    <div class="img"></div>
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
    

    