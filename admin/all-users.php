<?php include 'inc/header.php';?>
    <section class="dashboard"> 
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Users</h2>
                        <?php 

                        if (isset($_GET['delid'])) {
                            $userdel = $_GET['delid'];

                            $delquery = "DELETE FROM tbl_user WHERE id='$userdel'";
                            $catagorydel = $db->delete($delquery);
                            if ($catagorydel) {
                                echo "<span class='success'>User Deleted Successfully..!</span>"; 
                            }else{
                                echo "<span class='success'>User Not Deleted.</span>"; 
                                }
                        }

                       ?>
                        
                        <div class="posts-info">
                            <div class="float-left">
                                <!-- <a href="#">All Users (<span id="total-users">80</span>) |</a> 
                                <a href="#">Administrator (<span id="total-admin">4</span>)</a> 
                                <a href="#">Editor (<span id="total-editor">18</span>)</a>  -->
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
                                <th scope="col">Role</th>
                                <th scope="col">Committee</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
$query = "select * from tbl_user WHERE status='Approved' order by id desc";
$category = $db->select($query);
if ($category) {
    
    while ($result = $category->fetch_assoc()) {
       
?>

                    <tr>
                        <th scope="row"><input type="checkbox">
                            <!-- <img src="../images/users/user-01.jpg" alt="" class="img-fluid dashboard-img"> -->
                            <strong><a href="user-profile.php?userid=<?php echo $result['id'];?>"><?php echo $result['first_name'];?></a></strong>
                            <div class="row-actions">
                                <span class="edit">
                                <a href="user-role-update.php?userid=<?php echo $result['id'];?>">Role update</a>
                                </span>
                                <span class="view">
                                    <a href="user-profile.php?userid=<?php echo $result['id'];?>">View</a>
                                </span>
                                <span class="trash">
                                <a onclick="return confirm('are you sure to delete user!')" href="?delid=<?php echo $result['id'];?>">Trash</a>
                                </span>
                            </div>
                        </th>
                        <td><a href="#"><?php echo $result['first_name'];?> <?php echo $result['last_name'];?></a></td>
                        <td><a href="#"><?php echo $result['email'];?></a></td>
                        <td>
                            
                            <?php  
                            
                            if($result['role']== 0){
                                echo "admin";
                            }elseif($result['role']== 1){
                                echo "user";
                            }
                            
                            
                            ?>
                    
                        </td>


                        <td><?php echo $result['committee'];?></td>
                    </tr>
<?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body></html>