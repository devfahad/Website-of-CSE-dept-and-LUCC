<?php include 'inc/header.php';?> 

    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Comments</h2>

<?php 


if(isset($_POST['approved'])){

    $status ='Approved';
    $id = $_POST['userid'];

    $query = " UPDATE `tbl_blog_comment` 
            SET 
            `status`='$status'
            WHERE id='$id'
        ";

        $updated_row = $db->update($query);
        if ($updated_row) {
        echo "<span style='color:green;font-size:18px;' class='success'>Comment Approved</span>"; 
        }else{
        echo "<span style='color:red;font-size:18px;' class='error'>Comment Not Approved. Try Again</span>"; 
        }


}

if(isset($_POST['reject'])){

    $status ='Approved';
    $id = $_POST['userid'];

    

    $delquery = "DELETE FROM tbl_blog_comment WHERE id='$id'";
    $catagorydel = $db->delete($delquery);
    if ($catagorydel) {
        echo "<span class='success'>Comment Deleted Successfully..!</span>"; 
    }else{
        echo "<span class='success'>Comment Not Deleted.</span>"; 
        }
    





}

?>   
                        
                        <div class="posts-info">
                            <!-- <div class="float-left">
                                <a href="#">All (<span id="total-comments">124</span>) |</a> 
                                <a href="#">Pending (<span id="pending-comments">4</span>) |</a> 
                                <a href="#">Approved (<span id="approved-comments">110</span>) |</a> 
                                <a href="#">Spam (<span id="spam-comments">10</span>)</a> 
                                <a href="#">Trash (<span id="deleted-comments">0</span>)</a> 
                            </div> -->
                            <div class="float-right">
                                <form>
                                    <input type="search" id="post-search-input" name="" value="">
                                    <input type="submit" id="search-submit" class="button" value="Search Comments">
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="all-posts-table table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Author</th>
                                <th style="width:300px;" scope="col">Comment</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>

                            </tr>
                        </thead>
                        <tbody>
<?php
$query = "select * from tbl_blog_comment order by id desc";
$comment = $db->select($query);
if ($comment) {
    
    while ($result = $comment->fetch_assoc()) {
            
?>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <strong><a href="#"><?php echo $result['name'] ?></a></strong>
                                    <!-- <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="view">
                                            <a href="#">View</a>
                                        </span>
                                    </div> -->
                                </th>
                                <td><a href="#"><?php echo $result['message'] ?></a></td>

                                

                                <td><?php echo $fm->formatDate($result['date']); ?></td>
                                <td style="color:green;"><?php echo $result['status'] ?></td>
                                
                                <td>
                                <form action="" method="post">
                                   <input type="hidden" name="userid" value="<?php echo $result['id'] ?>" />
                                  <button class="pending-action" type="submit" name="approved">Approve</button>/
                                  <button class="pending-action" type="submit" name="reject">delete</button>
                                </form>
                                </td>
                            </tr>
<?php }}?>
                            
                           
                           
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body></html>