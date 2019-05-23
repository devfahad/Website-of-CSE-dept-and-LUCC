<?php include 'inc/header.php';?>


<?php  
if (!isset($_GET['photoid']) || $_GET['photoid'] == null ) {
    header("Location:gallery.php");
}else{
   $id = $_GET['photoid'];
}

?>

<!-- Title -->
<title>Gallery | Leading University Computer Club</title>

<!--BREADCRUMP START-->
<section class="breadcrumbSec bg_ash">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumbInner">
                    <h2 class="color_white">Gallery</h2>
                    <div class="breadcrumbNav">
                        <a href="index.php">Home</a><span>/</span>
                        <a href="gallery.php">Gallery</a><span>/</span>
                        <?php
                            $query = "select * from tbl_gallery WHERE folder_id='$id' order by folder_id desc";
                            $folder = $db->select($query);
                            if ($folder) {
                            
                                while ($result = $folder->fetch_assoc()) {
                                
                        ?>

                        <span class="active"><?php echo $result['name'] ?></span>
                        <?php }} ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BREADCRUMP END-->

<!--GALLERY REGULAR START-->
<section class="commonSection">
    <div class="container">
        <div class="row" id="coll3Regular">

        <?php
    $query = "select * from tbl_gallery WHERE folder_id='$id' order by folder_id desc";
    $folder = $db->select($query);
    if ($folder) {
      
        while ($result = $folder->fetch_assoc()) {
           
?>

            <div class="col-lg-4 col-sm-6">
                <div class="singleGal">
                    <div class="galImg">
                        <img src="admin/<?php echo $result['image'] ?>" alt="">
                    </div>
                    <div class="galHover">
                        <div class="galr">
                            <a href="admin/<?php echo $result['image'] ?>" class="popUp"><i class="fa fa-search"></i></a>
                        </div>
                        <h3 class="galTitle"><a href="#"><?php echo $result['name'] ?></a></h3>
                        <p class="galTag"><a href="#"><?php echo $result['date'] ?></a></p>
                    </div>
                </div>
            </div>
<?php }} ?>

            
            
            
            
            <div class="clearfix"></div>
            <div class="col-lg-12">
                <div class="paginationCustom text-center">
                    <span class="current">1</span>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--GALLERY REGULAR END-->

<!-- Footer Start -->
<?php include 'inc/footer.php';?>
<!-- Footer End -->