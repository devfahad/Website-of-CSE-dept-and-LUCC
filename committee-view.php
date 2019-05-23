<?php include 'inc/header.php';?>
<!-- Title -->
<title>Committee | Leading University Computer Club</title>

<?php  
if (!isset($_GET['listid']) || $_GET['listid'] == null ) {
    
}else{
   $id = $_GET['listid'];
}

?>




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
                        <a href="committee.php">Committee Members</a><span>/</span>
                        <span class="active">Committee-2019</span>
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
        <div class="row">

<?php 




$query = " SELECT tbl_user.`first_name` ,tbl_user.`id`, tbl_user.`last_name` , tbl_committeelist.`title`
FROM tbl_user , tbl_committeelist
WHERE tbl_user.`committee` = tbl_committeelist.`title` ";
            
                                  

$postlist = $db->select($query);

if ($postlist) {

 
    
    while ($result = $postlist->fetch_assoc()) {
  
?>
        <div class="col-sm-4">
            <div class="singleStaff">
                <div class="stafThumb">
                    <img src="images/committee/1.jpg" alt="">
                </div>
                <div class="stafDec">
                <h5><a class="color_black" href="single-committee-member.php?userid=<?php echo $result['id']; ?>"><?php echo $result['first_name'] ?> <?php echo $result['last_name'] ?></a></h5>
                    <p>designation</p>
                    <div class="sicialIcon">
                        <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="tw" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="gp" href="#"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <?php }} ?>
            
            
            
           
            <!-- <div class="col-lg-12">
                <div class="paginationCustom text-center">
                    <span class="current">1</span>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!--BOOKING END-->

<!-- Footer Start -->
<?php include 'inc/footer.php';?>