<?php include 'inc/header.php';?>

<!-- Title -->
<title>Blog | Leading University Computer Club</title>

<!--BREADCRUMP START-->
<section class="breadcrumbSec bg_ash">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumbInner">
                    <h2 class="color_white">Blog</h2>
                    <div class="breadcrumbNav">
                        <a href="index.php">Home</a><span>/</span>
                        <span class="active">Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BREADCRUMP END-->

<!--BLOG START-->
<section class="commonSection">
    <div class="container">
        <div class="row">
            <?php
                $query = "select * from tbl_blog limit 6";
                $post = $db->select($query);
                if ($post) {
                    while ($result = $post->fetch_assoc()) {
                
                ?>
            <div class="col-sm-4">
                <div class="singlePost topPost">
                    <div class="postThum">
                        <img src="admin/<?php echo $result['image'];?>" alt="">
                    </div>
                    <div class="singlebDec">
                        <div class="bdecTop">
                            <h3 class="blogTitle"><a href="single-blog.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></h3>
                            <p class="bDate"><?php echo $fm->formatDate($result['date']); ?></p>
                        </div>
                        <?php echo $fm->textShorten($result['body'], 50); ?>
                    </div>
                </div>
            </div>
                    <?php } ?> <!--end while loop-->
                <?php } else { header("Location:404.php");} ?> <!--end if else-->


            
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
<!--BLOG END-->
<?php include 'inc/footer.php';?>