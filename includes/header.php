<?php require_once('includes/db.php')?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Palanquin+Dark&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">    <link rel="stylesheet" href="css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="icofont/icofont.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" width="5px"/>
      </div>
        <div >
        
        <nav id="nav_list">
            <ul>
            <?php
    if ($curr_page == 'index.php') { ?>

                <li class="active"><a class="ref" href="#">Home</a></li>
   <?php } else { ?>
    <li class="links"><a class="ref" href="index.php">Home</a></li>

  <?php } ?>
  <?php
    if ($curr_page == 'gallery.php') { ?>

<li class="active"><a class="ref" href="gallery.php">Gallery</a></li>
   <?php } else { ?>
    <li class="links"><a class="ref" href="gallery.php">Gallery</a></li>

  <?php } ?>
  <?php
    if ($curr_page == 'about.php') { ?>

<li class="active"><a class="ref" href="about.php">About Us</a></li>
   <?php } else { ?>
    <li class="links"><a class="ref" href="about.php">About Us</a></li>

  <?php } ?>
  <?php
    if ($curr_page == 'contact.php') { ?>

<li class="active"><a class="ref" href="contact.php">Contact Us</a></li>
   <?php } else { ?>
    <li class="links"><a class="ref" href="contact.php">Contact Us</a></li>

  <?php } ?>
  <?php
    if ($curr_page == 'donate.php') { ?>

<li class="active"><a class="ref" href="donate.php">Donate</a></li>
   <?php } else { ?>
    <li class="links"><a class="ref" href="donate.php">Donate</a></li>

  <?php } ?>
  
  <?php
    if ($curr_page == 'register.php') { ?>

<li class="active "><a class="ref reg" href="gallery.php">Register Now</a></li>
   <?php } else { ?>
    <li class="links "><a class="ref reg" href="gallery.php">Register Now</a></li>

  <?php } ?>
            </ul>
        </nav>
        <div id="menu" onclick="display()"><img src="img/menu.png"  width="20px"/></div>
    </div>
    <div id="responsive-navbar" >
    <?php
    if ($curr_page == 'index.php') { ?>

                <li class="link"><a class="active" href="index.php">Home</a></li>
   <?php } else { ?>
    <li class="link"><a class="ref" href="index.php">Home</a></li>

  <?php } ?>
  <?php
    if ($curr_page == 'gallery.php') { ?>

<li class="link"><a class="active" href="gallery.php">Gallery</a></li>
   <?php } else { ?>
    <li class="link"><a class="" href="gallery.php">Gallery</a></li>

  <?php } ?>
  <?php
    if ($curr_page == 'about.php') { ?>

<li class="link"><a class="active" href="about.php">About Us</a></li>
   <?php } else { ?>
    <li class="link"><a class="" href="about.php">About Us</a></li>

  <?php } ?>
  <?php
    if ($curr_page == 'contact.php') { ?>

<li class="link"><a class="active" href="contact.php">Contact Us</a></li>
   <?php } else { ?>
    <li class="link"><a class="" href="contact.php">Contact Us</a></li>

  <?php } ?>
  
  <?php
    if ($curr_page == 'donation.php') { ?>

<li class="link"><a class="active" href="#">Donations</a></li>
   <?php } else { ?>
    <li class="link"><a class="" href="#">Donations</a></li>

  <?php } ?>
  <?php
    if ($curr_page == 'register.php') { ?>

<li class="link"><a class="active" href="student.php">Register Now</a></li>
   <?php } else { ?>
    <li class="link"><a class="" href="student.php">Register Now</a></li>

  <?php } ?>


       
    </div>
    </header>