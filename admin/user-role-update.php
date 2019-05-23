<?php include 'inc/header.php';?>
    <section class="dashboard"> 
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Update user role from here</h2>
<?php
if (!isset($_GET['userid']) || $_GET['userid'] == null ) {
    header("Location:all-users.php");
}else{
   $id = $_GET['userid'];
}
?>
                        
                    </div>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$role = $_POST['role'];
$role = mysqli_real_escape_string($db->link, $role);


    $query = " UPDATE `tbl_user` 
    SET 
    `role`='$role'
    WHERE id='$id'
";

$updated_row = $db->update($query);
if ($updated_row) {
echo "<span style='color:green;font-size:18px;' class='success'>User role updated successfull</span>"; 
}else{
echo "<span style='color:red;font-size:18px;' class='error'>User role Not Update. Try Again</span>"; 
}






}
?>

                    
                    <form id="add-committee-title" action="" method="post">
                    <?php
$query = "select * from  tbl_user where id='$id'";
$commitee = $db->select($query);
 while ($result = $commitee->fetch_assoc() ) {
?>
                        <label>User Name</label>
                        <input type="text" readonly name="name" value="<?php echo $result['first_name']?> <?php echo $result['last_name']?>"> <br>
                        <label>Role</label>
                        <select  name="role">
                            <option value="select">Select Folder</option>
                               <option value="0">Admin</option>
                               <option value="1">user</option>


                            

                        </select><br><br>
                        <input type="submit" value="submit">
<?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html> 