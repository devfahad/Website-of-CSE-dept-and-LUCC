<?php include 'inc/header.php';?>

    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="user-profile-info">
                        <h2>User Details</h2><br>

<?php
if (!isset($_GET['userid']) || $_GET['userid'] == null ) {
    header("Location:all-users.php");
}else{
   $id = $_GET['userid'];
}

?>
<?php 
$query = "select * from  tbl_user where id='$id'";
$commitee = $db->select($query);
 while ($result = $commitee->fetch_assoc() ) {
              
?>

                        <img class="rounded" src="../images/users/user-01.jpg" alt="">
                        
                        <br><br>
                        
                        <h2>Contact Info</h2><br>
                        <p>First Name : <span id="userFirstName"><?php echo $result['first_name']?></span></p>
                        <p>Last Name : <span id="userLastName"> <?php echo $result['last_name']?></span></p>
                        <p>Email : <span id="userNickname"> <?php echo $result['email']?></span></p>
                        <p>Birthday: <span id="userEmail"><?php echo $result['birthday']?></span></p>
                        <p>Phone: <span id="userPhone"><?php echo $result['mobile_number']?></span></p>
                        <p>Gender: <span id="userPhone"><?php echo $result['gender']?></span></p>
                        <p>Student ID: <span id="userPhone"><?php echo $result['student_id']?></span></p>
                        <p>Department: <span id="userPhone"><?php echo $result['department']?></span></p>
                        <p>Batch: <span id="userPhone"><?php echo $result['batch']?></span></p>
                        <p>Role: <span id="userPhone">
                            <?php 
                            if($result['role']== 0){
                                echo "admin";
                            }elseif($result['role']== 1){
                                echo "user";
                            }
                            ?></span>
                        </p>
                        <p>Committee: <span id="userPhone"><?php echo $result['committee']?></span></p>
                        
                        <p>Biographical Info : <span id="userBio"><?php echo $result['bio']?></span></p>


 <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</body></html>