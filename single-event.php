 <?php include 'inc/header.php';?>

<!-- Title -->
<title>Single Event | Leading University Computer Club</title>

<?php
    if (!isset($_GET['id']) || $_GET['id'] == NULL ) {
        header("Location: 404.php");
    } else{
        $id = $_GET['id'];
    }

?>

<!--BREADCRUMP START-->
<section class="breadcrumbSec bg_ash">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumbInner">
                    <h2 class="color_white">Event</h2>
                    <div class="breadcrumbNav">
                        <a href="index.php">Home</a><span>/</span>
                        <a href="blog.php">event</a><span>/</span>
                        <span class="active">Single event</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BREADCRUMP END-->

<!--BLOG SINGLE START-->
<section class="commonSection">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="singleBlogPage bg_ash">
                    <?php 
                            $query = "select * from tbl_event where id=$id";
                            $post = $db->select($query);
                            if ($post) {
                                while ($result = $post->fetch_assoc()) {
                        ?>
                    <div class="postThum">
                        <img src="admin/<?php echo $result['image'];?>" alt="">
                    </div>
                    <div class="blogSingleDec">

                        

                        <div class="bsDecTop">
                            <h3 class="blogTitle"><?php echo $result['title'];?></h3>
                            <p class="bDate"><?php echo $fm->formatDate($result['event_date']); ?></p>
                        </div>
                        <!-- <div class="likeView clearfix">
                            <a class="repl" href="#"><i class="fa fa-reply"></i></a>
                            <a href="#"><i class="far fa-heart"></i></a>
                            <h6>152 likes</h6>
                            <h6 class="pull-right">1450 views</h6>
                        </div> -->
                        <?php echo $result['body'];?>
                    </div>
                <?php } } else { header("Location: 404.php");} ?>
                </div>
                <!-- <div class="singleBauthor bg_ash">
                    <img src="images/author/author-01.jpg" alt="">
                    <h3><a class="color_black" href="#">Fahad Ahmed</a></h3>
                    <p>
                        Andouille ground round strip steak, filet mignon pig bacon cow. Spare ribs 
                        porchetta tongue andouille beef ribs. Capicola beef biltong landjaeger.
                    </p>
                    <div class="sicialIcon">
                        <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="tw" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="gp" href="#"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div> -->
                <div class="commentBox bg_ash">
                    
                        <ol class="commentList">
                        <?php 
                                $query = "select * from  tbl_event_comment WHERE post_id='$id' AND status='Approved' order by id desc";
                                $comment = $db->select($query);
                                if ($comment) {
                                    while ($result = $comment->fetch_assoc()) {
                        ?>
                            <li>
                                <div class="singleCom">
                                    <img src="http://www.gravatar.com/avatar/" alt="">
                                    <div class="comHead">
                                        
                                        <h3 class="comName"><a class="color_black" href="#"><?php echo $result['name'] ?></a></h3>
                                        <p class="comDate"><a href="#"><?php echo $fm->formatDate($result['date']); ?></a></p>
                                    </div>
                                    <?php echo $result['message'] ?>
                                </div>
                                
                            </li>
                        <?php }} ?>
                            
                        </ol>
                        <div class="commForm">
    
                        <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $postid = $_POST['postid'];
        $name = $fm->validation($_POST['name']);
        $email = $fm->validation($_POST['email']);
        $phone = $fm->validation($_POST['phone']);
        $message = $fm->validation($_POST['message']);
        $status = 'Pending';
    
       
    
        if ($name == "" || $email == "" || $phone == "" || $message == "" ) {
            echo "<span class='error'>flied must not be empty..!</span>";
        }else{
            $query = "INSERT INTO tbl_event_comment(post_id, name, email, phone, message, status) VALUES('$postid', '$name', '$email', '$phone', '$message', '$status') ";
            $commentinsert = $db->insert($query);
            if ($commentinsert) {
                    echo "<span style='color:green;font-size:18px;' class='success'>Comment succeful!!. Wait for admin apporved. when apporved by admin it show in this post</span>"; 
            }else{
                    echo "<span style='color:red;font-size:18px;' class='error'>Please try again.</span>"; 
            }
            
        }
    
    }
    ?>
    
                            <form action="" method="post">
                                <input type="hidden" name="postid" value="<?php echo $id; ?>"/>
                                <input type="text" name="name" placeholder="Full name">
                                <input class="comfEmail" name="email" type="email" placeholder="Email">
                                <input type="text" name="phone" placeholder="Phone">
                                <textarea name="message" placeholder="Message"></textarea>
                                <input type="submit" name="submit" value="Send comment">
                            </form>
                        </div>
                    </div>                

            </div>
        </div>
    </div>
</section>
<!--BLOG SINGLE END-->

<!-- Footer Start -->
<?php include 'inc/footer.php';?>