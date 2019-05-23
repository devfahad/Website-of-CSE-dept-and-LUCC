<?php include 'inc/header.php';?>
<!-- Title -->
<title>Committee | Leading University Computer Club</title>


<!--BREADCRUMP START-->
<section class="breadcrumbSec bg_ash">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumbInner">
                    <h2 class="color_white">Committee Members</h2>
                    <div class="breadcrumbNav">
                        <a href="index.php">Home</a><span>/</span>
                        <span>Quick Links</span><span>/</span>
                        <span class="active">Committee Lists</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BREADCRUMP END-->


<!--BOOKING START-->
<section class="commonSection staffSec">
    <div class="container">
        <ul class="list-group">

<?php 

$query = "select * from  tbl_committeelist";
$commitee = $db->select($query);
 while ($result = $commitee->fetch_assoc() ) {

?>



    <li class="list-group-item"><a href="committee-view.php?listid=<?php echo $result['id'] ?>"><?php echo $result['title'] ?></a></li>


<?php 
 }


?>
           
        </ul>
    </div>
</section>
<!--BOOKING END-->

<!-- Footer Start -->
<?php include 'inc/footer.php';?>