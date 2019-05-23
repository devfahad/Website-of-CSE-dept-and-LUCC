<?php include 'inc/header.php';?>
    <section class="dashboard"> 
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Update Committee</h2>
                        
                    </div>
                    <?php
if (!isset($_GET['commiid']) || $_GET['commiid'] == null ) {
    header("Location:committee-lists.php");
}else{
   $id = $_GET['commiid'];
}

?>

                    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $title = $fm->validation($_POST['title']); 
    $title = mysqli_real_escape_string($db->link, $title);

    if (empty($title)) {
        echo "<span class='error'>flied must not be empty..!</span>";
    }else{
        $query =" UPDATE `tbl_committeelist` 
                    SET 
                    `title`='$title'
                    WHERE id='$id'
                    ";
        $Commiinsert = $db->update($query);
        if ($Commiinsert) {
                echo "<span style='color:green;font-size:18px;' class='success'>Committee updated Successfully..!</span>"; 
        }else{
                echo "<span style='color:red;font-size:18px;' class='error'>Committee Not updated.</span>"; 
        }
        
    }

    }
?>

<?php 
$query = "select * from  tbl_committeelist where id='$id'";
$commitee = $db->select($query);
 while ($result = $commitee->fetch_assoc() ) {
              
?>
                    
                    <form id="add-committee-title" action="" method="post">
                        <label>Enter the title</label>
                        <input type="text" name="title" value="<?php echo $result['title']?>" >
                        <input type="submit" value="Enter">
                    </form>
 <?php } ?>
                </div>
            </div>
        </div>
    </section>
</body></html>