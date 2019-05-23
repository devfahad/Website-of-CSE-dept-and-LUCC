<?php include 'inc/header.php';?>
    <section class="dashboard"> 
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Add New upload folder</h2>
                        
                    </div>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = $_POST['name'];
$name = $fm->validation($_POST['name']); 
$name = mysqli_real_escape_string($db->link, $name);

if (empty($name)) {
echo "<span class='error'>flied must not be empty..!</span>";
}else{
$query = "INSERT INTO tbl_gallery_folder(folder_name) VALUES('$name') ";
$folinsert = $db->insert($query);
if ($folinsert) {
    echo "<span style='color:green;font-size:18px;' class='success'>Folder Inserted Successfully..!</span>"; 
}else{
    echo "<span  style='color:red;font-size:18px;' class='success'>Folder Not Inserted.</span>"; 
}

}

}
?>

                    
                    <form id="add-committee-title" action="" method="post">
                        <label>Enter the name of folder</label>
                        <input type="text" name="name" placeholder="Enter Title Here">
                        <input type="submit" value="Enter">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html> 