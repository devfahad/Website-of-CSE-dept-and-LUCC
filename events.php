<?php include 'inc/header.php';?> 

<!-- Title -->
<title>Events | Leading University Computer Club</title>
<!--BREADCRUMP START-->
<section class="breadcrumbSec bg_ash">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumbInner">
                    <h2 class="color_white">Events</h2>
                    <div class="breadcrumbNav">
                        <a href="index.php">Home</a><span>/</span>
                        <span class="active">Events</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BREADCRUMP END-->

<!--EVENTS START-->
<section class="commonSection">
    <div class="container">
        <div class="row">
            <?php
                $query = "select * from tbl_event order by id desc limit 3";
                $post = $db->select($query);
                if ($post) {
                    while ($result = $post->fetch_assoc()) {
                
            ?> 
            <div class="col-sm-4">
                <div class="monthlyEvents eventTwo">
                    <div class="monthName">
                        <h3 class="eventDate"><a href="#"><?php echo $fm->formatDate($result['event_date']); ?></a></h3>
                    </div>
                    <div class="singleEven">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="eventThumb">
                                    <img src="admin/<?php echo $result['image'];?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eventDec">
                                    <h3 class="eventTitle">
                                    <a href="single-event.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a>
                                    </h3>
                                    <?php echo $fm->textShorten($result['body']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?> <!--end while loop-->
            <?php }?> <!--end if else-->
            
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
<!--EVENTS END-->

<!-- Footer Start -->
<?php include 'inc/footer.php';?>