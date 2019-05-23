<?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/Format.php';?>

<?php
    $db = new Database();
    $fm = new Format();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Leading University Computer Club">
    <meta name="keywords" content="Computer, Club, Leading, University">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <!-- Revolution CSS -->
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <!-- Owl Carousel CSS-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <!-- Magnific PopUp CSS -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/preset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!--[if IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

<!-- Preloader Start -->
<div class="preloader">
    <div class="la-ball-clip-rotate-pulse la-2x">
        <div></div>
        <div></div>
    </div>
</div> 

<!-- Header Start -->
<header>
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <div class="top-flex">
                <div class="top-area-left">
                    <div class="left-header-top">
                        <ul>
                            <li><a href="mailto:support@lucc.com"><i class="far fa-envelope header-top-icon"></i>support@lucc.com</a></li>
                            <li><a href="tel:+8801766072127"><i class="fa fa-phone header-top-icon"></i>+8801766072127</a></li>
                        </ul>                    
                    </div>
                </div>
                <div class="top-area-right text-right">
                    <div class="right-header-top">
                        <ul>
                            <li><a href="userpanel/login.php"><i class="fa fa-user header-top-icon"></i>Login</a></li>
                            <li><a href="registration.php"><i class="fa fa-headphones header-top-icon"></i>Registration</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="innerHeader">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-2">
                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-10">
                    <nav class="mainNav2">
                        <div class="mobileMenu2">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="events.php">Events</a></li>
                            <!--<li class="has-menu-items"><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="faq.html">Faq Page</a></li>
                                    <li><a href="committee.html">Committee</a></li>
                                    <li><a href="single-committe-member.html">Single Committee Member</a></li>
                                    <li><a href="registration.html">Registration</a></li>
                                    <li><a href="announcements.html">Anouncements</a></li>
                                </ul>
                            </li>-->
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                        
                    </nav>
                </div>
                <!--<div class="headerSearch">
                    <form action="#" method="post">
                        <input type="search" placeholder="Search Keyword">
                        <button id="searchBtn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>-->
            </div>
        </div>
    </div>
</header>