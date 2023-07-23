<!doctype html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
  
  <title>Portfolio Tool</title>
  
  <link href="styles.css" type="text/css" rel="stylesheet">
  <link href="styles_front.css" type="text/css" rel="stylesheet">
  
  <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
  <script src="https://kit.fontawesome.com/d3998de45c.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="grid-container">
        <header class="header">
            <div class="header-container">
                <div class="brand">
                    <a href="index.php">
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


  <!-- <h1>Website Admin</h1> -->
  
  <?php if(isset($_SESSION['id'])): ?>

    <p style="padding: 0 1%; text-align: center;">
      <a href="dashboard.php">Dashboard</a> | 
      <a href="logout.php">Logout</a>
    </p>
  
  <?php endif; ?>
  
  <hr>
  
  <?php echo get_message(); ?>
  
  <div style="max-width: 1500px; margin: auto; padding: 0 1%;">
  
