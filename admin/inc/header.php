<?php 
include "../lib/session.php"; 
Session::checkSession();
?>
<?php include "../config/config.php"; ?>
<?php include "../lib/Database.php"; ?>
<?php include "../helpers/Format.php"; ?>
<?php 
$db = new Database();
$fm = new Format();
?>
<?php 
//set headers to not cache a page
header("Cache-Control: no-cache, must-revalidate"); //http 1.1
header("Pragma: no-cache"); //http 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
//date in the past
//or if you do want a file to cache, use:
header("Cache-Control: max-age=2592000");
//30days (60sec * 60min * 24hours * 30days)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Dashboard | LUCC</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!--[if IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 user-profile">
                <div class="float-left">
                    <p><i class="fas fa-home"></i> Leading University Computer Club</p>
                </div>
                <div class="float-right">
                    Hello 
                    <a href="#"><span id="user-profile-name"> <?php echo Session::get('first_name'); ?></span>
                        <img src="../images/users/user-01.jpg" alt="" class="rounded-circle">
                    </a>
                    <?php 
                    if (isset($_GET['action']) && $_GET['action'] == logout) {
                        Session::destroy();
                    }
                    ?>
                    <a href="?action=logout" id="logout">Logout</a>
                </div>
            </div>
        </div>
    </div>