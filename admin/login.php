<?php    
include "../lib/session.php"; 
Session::init();

?>

<?php include "../config/config.php"; ?>
<?php include "../lib/Database.php"; ?>
<?php include "../helpers/Format.php"; ?>

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
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Login | Leading University Computer Club</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="../images/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="../css/fontawesome.css">
    <!-- Revolution CSS -->
    <link rel="stylesheet" type="text/css" href="../css/settings.css">
    <!-- Owl Carousel CSS-->
    <link rel="stylesheet" type="text/css" href="../css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../css/owl.theme.css">
    <!-- Magnific PopUp CSS -->
    <link rel="stylesheet" type="text/css" href="../css/magnific-popup.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/preset.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">

    <!--[if IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- PRELOADER START -->
    <div class="preloader">
        <div class="la-ball-clip-rotate-pulse la-2x">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- PRELOADER END -->
    <div class="container-login100">
        <div class="wrap-login100">
            <?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $fm->validation($_POST['email']);
$password = $fm->validation(md5($_POST['password']));

$username = mysqli_real_escape_string($db->link, $username);
$password = mysqli_real_escape_string($db->link, $password);

$query = "SELECT * FROM tbl_admin WHERE email ='$username' AND password ='$password'";
$result = $db->select($query);
if ($result != false) {
    
    $value = mysqli_fetch_array($result);
    $row   = mysqli_num_rows($result);

    if ($row > 0) {
        Session::set("login", true);
        Session::set("email", $value['email']);
        Session::set("username", $value['first_name']);
        Session::set("userId", $value['id']);
        header("location:index.php");


    }else{
    echo "<span style='color:red; font-size:18px;'>NO result found..!!</span>";
    }
}else{
    echo "<span style='color:red; font-size:18px;'>Email and password not matched..!!</span>";
}


}


?>
            <div class="login100-pic js-tilt" data-tilt>
                <img src="../images/img-01.png" alt="IMG">
            </div>
            <form action="login.php" method="post" class="login100-form validate-form">
                <span class="login100-form-title">
                    Admin Login
                </span>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.com">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">
                        Forgot
                    </span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>

                <div class="text-center p-t-100">
                    <a class="txt2" href="registration.php">
                        Create your Account
                        <i class="fas fa-long-arrow-alt-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
    <!-- Jquery JS -->
    <script src="../js/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Revolution JS -->
    <script src="../js/jquery.themepunch.revolution.min.js"></script>
    <script src="../js/jquery.themepunch.tools.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="../js/owl.carousel.js"></script>
    <!-- Magnific PopUp JS -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <!-- Appear JS for counter -->
    <script src="../js/jquery.appear.js"></script>

    <script src="../js/tilt.jquery.min.js"></script>

    <script src="../js/jquery.sticky.js"></script>
    <!-- Custom JS -->
    <script src="../js/theme.js"></script>

</body>

</html>
