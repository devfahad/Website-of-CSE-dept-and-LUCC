<?php include 'inc/header.php';?>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Pending Users</h2>
<?php 


if(isset($_POST['approved'])){

    $status ='Approved';
    $id = $_POST['userid'];

    $query = " UPDATE `tbl_user` 
            SET 
            `status`='$status'
            WHERE id='$id'
        ";

        $updated_row = $db->update($query);
        if ($updated_row) {
        echo "<span style='color:green;font-size:18px;' class='success'>User Approved</span>"; 
        }else{
        echo "<span style='color:red;font-size:18px;' class='error'>User Not Approved. Try Again</span>"; 
        }


}

if(isset($_POST['reject'])){

    $status ='Approved';
    $id = $_POST['userid'];

    

    $delquery = "DELETE FROM tbl_user WHERE id='$id'";
    $catagorydel = $db->delete($delquery);
    if ($catagorydel) {
        echo "<span class='success'>User Deleted Successfully..!</span>"; 
    }else{
        echo "<span class='success'>user Not Deleted.</span>"; 
        }
    





}

?>                       
                        <div class="posts-info">
                            <div class="float-left">
                                <!-- <a href="#">All Users (<span id="total-users">20</span>)</a>  -->
                            </div>
                            <div class="float-right">
                                <form>
                                    <input type="search" id="post-search-input" name="" value="">
                                    <input type="submit" id="search-submit" class="button" value="Search Users">
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="all-posts-table table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Committee</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                                $query = "select * from tbl_user WHERE status='Pending' order by id desc";
                                $category = $db->select($query);
                                if ($category) {
                                    
                                    while ($result = $category->fetch_assoc()) {
                                        
                            ?>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <!-- <img src="../images/users/user-01.jpg" alt="" class="img-fluid dashboard-img"> -->
                                    <strong><a href="#"><?php echo $result['first_name'] ?></a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="view">
                                            <a href="#">View</a>
                                        </span>
                                        <span class="trash">
                                            <a href="#">Trash</a>
                                        </span>
                                    </div>
                                </th>
                                <td><a href="#"><?php echo $result['first_name'] ?> <?php echo $result['last_name'] ?></a></td>
                                <td><a href="#"><?php echo $result['email'] ?></a></td>
                                <td><?php echo $result['committee'] ?></td>
                                <td style="color:green;"><?php echo $result['status'] ?></td>
                                <td>
                                    <!-- <a class="pending-action" href="#">Approve</a> / 
                                    <a href="#">Reject</a></td> -->
                                <form action="" method="post">
                                   <input type="hidden" name="userid" value="<?php echo $result['id'] ?>" />
                                  <button class="pending-action" type="submit" name="approved">Approve</button>/
                                  <button class="pending-action" type="submit" name="reject">Reject</button>
                                </form>
                            </tr>

                        <?php } }?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body></html>