<?php include 'inc/header.php';?>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">



                        <h2>Gallery</h2>
<?php 

if (isset($_GET['delid'])) {
    $catdel = $_GET['delid'];

    $delquery = "DELETE FROM tbl_gallery WHERE id='$catdel'";
    $catagorydel = $db->delete($delquery);
    if ($catagorydel) {
        echo "<span class='success'>Deleted Successfully..!</span>"; 
    }else{
        echo "<span class='success'>Not Deleted.</span>"; 
        }
}

?>

                        <a href="upload-photo.php" class="btn btn-outline-dark" style="padding: 2px 10px;">Add New</a>
                        
                        <div class="posts-info">
                            <div class="float-left">
                                <!-- <a href="#">All (<span id="total-photos">4</span>)</a>  -->
                            </div>
                            <div class="float-right">
                                <form>
                                    <input type="search" id="image-search-input" name="" value="">
                                    <input type="submit" id="search-submit" class="button" value="Search Image">
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="all-posts-table table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">File</th>
                                <th scope="col">Author</th>
                                <th scope="col">Uploaded to</th>
                                <th scope="col"><i class="fas fa-comment-alt"></i></th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
<?php 

$query = " SELECT tbl_gallery.*, tbl_gallery_folder.folder_name FROM tbl_gallery
            INNER JOIN tbl_gallery_folder
            ON tbl_gallery.folder_id = tbl_gallery_folder.id
            ORDER BY tbl_gallery.id DESC";

$photolist = $db->select($query);

if ($photolist) {

 while ($result = $photolist->fetch_assoc()) {

?>

                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <img src="<?php echo $result['image'];?>" alt="" class="img-fluid dashboard-img">
                                    <strong><a href="#"><?php echo $result['name'];?></a></strong>
                                    <div class="row-actions">
                                        
                                        <span class="trash">
                                        <a onclick="return confirm('are you sure to delete!')" href="?delid=<?php echo $result['id'];?>">Trash</a>
                                        </span>
                                        
                                    </div>
                                </th>
                                <td><a href="#">Admin</a></td>
                                <td><a href="#"><?php echo $result['folder_name'];?></a></td>
                                <td>2</td>
                                <td><?php echo $result['date'];?></td>
                            </tr>
<?php } } ?>
                            
                            
                           
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body></html>