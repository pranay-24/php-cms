<?php

include( 'admin/includes/database.php' );
include( 'admin/includes/config.php' );
include( 'admin/includes/functions.php' );

?>
<!doctype html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
  
  <title>Portfolio tool</title>
  
  <link href="styles_front.css" type="text/css" rel="stylesheet">
  <link href="styles.css" type="text/css" rel="stylesheet">
  
  
</head>
<body>

  <!-- <h1>Welcome to My Website!</h1>
  <p>This is the website frontend!</p> -->
  <div class="grid-container">
        <header class="header">
            <div class="header-container">
                <div class="brand">
                    <a href="./index.html">
                        <span class="icon"></span>
                        <span class="title">Portfolio Tool</span>
                    </a>
                </div>
                <nav class="nav">
                    <ul class="list">
                        <li class="list-item">
                            <a href="register.php">
                                <span class="icon"></span>
                                <span class="title">Signup</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="./index.html">
                                <span class="icon"></span>
                                <span class="title">About</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="./index.html">
                                <span class="icon"></span>
                                <span class="title">Contact</span>
                            </a>
                        </li>
                    
                    </ul>

                    <div class="media">
                        <a href="#">
                            <span class="icon"><i class="fa-brands fa-square-facebook"></i></span>
                        </a>
                        <a href="#">
                            <span class="icon"><i class="fa-brands fa-square-whatsapp"></i></span>
                        </a>
                        <a href="#">
                            <span class="icon"><i class="fa-brands fa-linkedin"></i></span>
                        </a>
                        
                    </div>
                </nav>

                <div id="burger">
                    <div class="burger-container">
                        <div class="line" id="line1"></div>
                        <div class="line" id="line2"></div>
                        <div class="line" id="line3"></div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div class="hero-container">
        <img src="image1.jpg" alt="Hero Image">
        <div class="hero-content">
          <h1>Invest in everything</h1>
          <p>Online platform to invest in stocks, derivatives, mutual funds, and more.</p>
          <a href="register.php" class="signup-button">Sign Up</a>
          <a href="login.php" class="signup-button">Login</a>

          <!-- <button id="signUp_button" class="signup-button">Sign Up</button>
          <button id="login_button" class="signup-button">Login</button> -->
        </div>
    </div>

    <script src="./src/javascript/main.js"></script>

<!--Footer -->
<footer>
    <div class="container">
        <div class="sec about">
            <p class="title">About</p>
            <p>A tool to manage the stock portfolio</p>
            <ul class="social">
                <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
               
            </ul>
        </div>
        <div class="sec quicklinks">
            <p class="title">Quick Links</p>
            <ul>
                <li><a href="register.php">Signup</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Contact Form</a></li>
            </ul>
        </div>
        <!-- <div class="sec quicklinks">
            <p class="title">Quick Links</p>
                <ul>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Team</a></li>
                    <li><a href="">History</a></li>
                </ul>
        </div> -->
        <div class="sec contact">
            <p class="title">Contact Me</p>
            <ul>
                <li><span><i class="fa-solid fa-phone"></i></span><p><a href="tel:+1-234567890">+1-234567890</a></p></li>
                <li><span><i class="fa-solid fa-envelope"></i></span><p><a href="mailto:m@email.com">abc@example.com</a></p></li>
              
            </ul>
            </div>
        </div>  
        <div class="copyright-text">Copyright 2023.All rights reserved</div>
  </footer>  


  <script src="main.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://kit.fontawesome.com/d3998de45c.js" crossorigin="anonymous"></script>
</body>
</html>
