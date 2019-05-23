<?php include 'inc/header.php';?>

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
                        <span class="active">Gallery</span>
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
        <ul class="list-group">
<?php
$query = "select * from tbl_gallery_folder order by id desc";
$folder = $db->select($query);
if ($folder) {
      
while ($result = $folder->fetch_assoc()) {
           
?>

       <li class="list-group-item"><a href="single_gallery.php?photoid=<?php echo $result['id']?>"><?PHP  echo $result['folder_name']?></a></li>
<?php }}?>
            
        </ul>
    </div>
</section>
<!--GALLERY REGULAR END-->

<!-- Footer Start -->
<?php include 'inc/footer.php';?>