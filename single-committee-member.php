<?php include 'inc/header.php';?>


<?php
if (!isset($_GET['userid']) || $_GET['userid'] == null ) {

}else{
$id = $_GET['userid'];
}

?>

<?php 
$query = "select * from  tbl_user where id='$id'";
$singleuser = $db->select($query);
while ($result = $singleuser->fetch_assoc() ) {

?>



<!--BREADCRUMP START-->
<section class="breadcrumbSec bg_ash">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumbInner">
                    <h2 class="color_white"><?php echo $result['first_name'] ?> <?php echo $result['last_name'] ?></h2>
                    <div class="breadcrumbNav">
                        <a href="index.php">Home</a><span>/</span>
                        <span>Committee Members<span></span></span>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BREADCRUMP END-->

<!--BOOKING START-->
<section class="commonSection teamSingleSec">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="singleStaff singleTeam">
                    <div class="stafThumb">
                        <img src="images/committee/s1.jpg" alt="">
                    </div>
                    <div class="stafDec">
                        <h5><?php echo $result['first_name'] ?> <?php echo $result['last_name'] ?></h5>
                        <p><?php 
                        if($result['role'] == 0){
                            echo "Admin";
                        }else{
                            echo "User";
                        }
                        ?></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="singTeamContent">
                    <div class="singTeamTab">
                        <ul class="nav nav-tabs clearfix teamtabnav" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#bio" role="tab">Biography</a></li>
                            
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="bio" role="tabpanel">
                                <div class="biographyCon">
                                    <div class="singlebio">
                                        <h3>Biography:</h3>
                                        <p>
                                           <?php echo $result['bio'] ?>
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BOOKING END-->
<?php } ?>

<!-- Footer Start -->
<footer class="footer bg_ash" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <aside class="widget">
                    <h3 class="widgetTitle">Our Contacts</h3>
                    <address class="faddress">
                        <div class="sads">
                            <i class="fa fa-globe my-1"></i>
                            <p>Kamal Bazar 3112<br>
                            Ragib nagar, Sylhet</p>
                        </div>
                        <div class="sads">
                            <i class="fa fa-phone my-1"></i>
                            <p class="ftel"><a href="tel:0821-720303">0821-720303</a></p>
                        </div>
                        <div class="sads">
                            <i class="fa fa-envelope my-1"></i>
                            <p class="fmail"><a href="mailto:mailto:lucc@support.com">lucc@support.com</a></p>
                        </div>
                    </address>
                </aside>
            </div>
            <div class="col-lg-3 col-sm-6">
                <aside class="widget">
                    <h3 class="widgetTitle">Announcements</h3>
                    <ul class="quick-links">
                        <li><a href="#" target="_blank">Announcement 1</a></li>
                        <li><a href="#" target="_blank">Announcement 2</a></li>
                        <li><a href="#" target="_blank">Announcement 3</a></li>
                        <li><a href="#" target="_blank">Announcement 4</a></li>
                        
                    </ul>
                </aside>
            </div>
            <div class="col-lg-3 col-sm-6">
                <aside class="widget">
                    <h3 class="widgetTitle">Quick Links</h3>
                    <ul class="quick-links">
                        <li><a href="faq.html" target="_blank">FAQ</a></li>
                        <li><a href="committee.html" target="_blank">Committee</a></li>
                        <li><a href="gallery.html" target="_blank">Gallery</a></li>
                        <li><a href="registration.html" target="_blank">Registration</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-lg-3 col-sm-6">
                <aside class="widget">
                    <h3 class="widgetTitle">Follow Us</h3>
                    <div class="sicialIcon fsocial">
                        <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="tw" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="gp" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="li" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</footer>

<!-- Copyright Start -->
<section class="copyRight bg_black">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="copyPera color_white">&copy; Leading University 2019, all rights reserved | Designed &amp; Developed by <a href="#">Fahad, Nafi &amp; Tanvir</a></p>
            </div>
        </div>
    </div>
</section>

<!-- Back To Top Start -->
<a href="#" id="backToTop"><i class="fa fa-angle-up"></i></a>

<!-- Jquery JS -->
<script src="js/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Revolution JS -->
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<!-- Owl Carousel JS -->
<script src="js/owl.carousel.js"></script>
<!-- Magnific PopUp JS -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Appear JS for counter -->
<script src="js/jquery.appear.js"></script>

<script src="js/tilt.jquery.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<!-- Custom JS -->
<script src="js/theme.js"></script>
</body>

</html>