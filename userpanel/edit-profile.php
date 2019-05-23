<?php include 'inc/header.php';?>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
<?php  
$userid = Session::get('userId');
?>

<!-- <h2><?php  echo $userid; ?></h2> -->

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = mysqli_real_escape_string($db->link, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db->link, $_POST['last_name']);
    $student_id = mysqli_real_escape_string($db->link, $_POST['student_id']);
    $committee = mysqli_real_escape_string($db->link, $_POST['committee']);
    $email = mysqli_real_escape_string($db->link, $_POST['email']);
    $mobile_number = mysqli_real_escape_string($db->link, $_POST['mobile_number']);
    $bio = mysqli_real_escape_string($db->link, $_POST['bio']);
    $password = md5($_POST['password']);

    

    $query = " UPDATE `tbl_user` 
                    SET 
                    `email`='$email',
                    `password`='$password',
                    `first_name`='$first_name',
                    `last_name`='$last_name',
                    `mobile_number`='$mobile_number',
                    `student_id`='$student_id',
                    `committee`='$committee',
                    `bio`='$bio'
                    WHERE id='$userid'
        ";

        $updated_row = $db->update($query);
        if ($updated_row) {
            echo "<span style='color:green;font-size:18px;' class='success'>Data updated successfull</span>"; 
        }else{
            echo "<span style='color:red;font-size:18px;' class='error'>Data Not Update. Try Again</span>"; 
        }




    

}





            
             ?>






                    
                    <form id="edit-profile" action="" method="post" enctype="multipart/form-data">
<?php 
$query = "select * from  tbl_user where id='$userid'";
$user = $db->select($query);
while ($result = $user->fetch_assoc()) {

?>
                        <h2>Name    </h2>
                        <!-- <label>Username (required)</label>
                        <input type="text" required> <span>Usernames cannot be changed.</span><br> -->
                        
                        <label>First Name(required)</label>
                        <input type="text" name="first_name" value="<?php echo $result['first_name']; ?>" required><br>
                        
                        <label>Last Name (required)</label>
                        <input type="text" name="last_name" value="<?php echo $result['last_name']; ?>" required><br>
                        
                        <label>Student ID (required)</label>
                        <input type="text" name="student_id" value="<?php echo $result['student_id']; ?>" required><br>
                        <label for="">Committee (required)</label>
                        <select name="committee" required>
                        <option value="">Committee</option>
<?php
$query = "select * from tbl_committeelist";
$category = $db->select($query);
if ($category) {
while ($result = $category->fetch_assoc()) {

?>
                          <option value="<?php echo $result['title']?>"><?php echo $result['title']?></option>
<?php } } ?>
                            
                        </select>
                        <span>Select (Not a member) if you are not a registered member of LUCC</span>
                        
                        <h2>Contact Info</h2>
                        <label>Email (required)</label>
                        <input type="email" name="email" value="<?php echo $result['email']; ?>"><br>
                        
                        <label>Phone (optional)</label>
                        <input type="text" name="mobile_number" value="<?php echo $result['mobile_number']; ?>"><br>
                        
                        <h2>About Yourself</h2>
                        <label style="vertical-align: top;">Biographical Info</label>
                        <textarea name="bio" value="" id="" rows="5"><?php echo $result['bio']; ?></textarea><br>
                        
                        <!-- <label>Profile Picture</label>
                        <input type="file" name="pic" accept="image/*"> -->
                        
                        <h2>Account Management</h2>
                        <label>New Password</label>
                        <input name="password" type="password" maxlength="8"><br>
                        
                        <input type="submit" value="Update Profile">
<?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body></html>