<?php include 'inc/header.php';?>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Upload New Photo</h2>
                    </div>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name    = mysqli_real_escape_string($db->link, $_POST['name']);
    $folder    = mysqli_real_escape_string($db->link, $_POST['folder']);


    $permited = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0,10).'.'.$file_ext;
    $uploaded_image = "upload/".$unique_image;

    if ($name == "" || $folder == "" || $file_name == "") {
        echo "<span class='error'>flied must not be empty..!</span>";
    }elseif ($file_size>1048567) {
        echo "<span class='error'>Image size should be less then 1MB</span>";
    }elseif (in_array($file_ext, $permited) === false) {
        echo "<span class='error'>You can upload only:-".implode(',', $permited)."</span>";
    }else{

        move_uploaded_file($file_temp, $uploaded_image);

        $query = "INSERT INTO tbl_gallery(name, folder_id, image) 
                  VALUES('$name', '$folder','$uploaded_image')";
        $inserted_rows = $db->insert($query);
        if ($inserted_rows) {
            echo "<span class='success'>Upload  photo succesfully..!</span>"; 
        }else{
            echo "<span class='error'>photo Not Upload. Try Again</span>"; 
        }
    }





 }
?> 


                    <form action="" id="upload-photo" method="post" enctype="multipart/form-data">
                       <input type="text" name="name" placeholder="Enter image name"><br><br>  
                        <input type="file" name="image" accept="image/*"><br><br>
                        <select  name="folder">
                            <option value="select">Select Folder</option>
<?php
$query = "select * from  tbl_gallery_folder order by id desc";
$category = $db->select($query);
if ($category) {
while ( $result = $category->fetch_assoc()) {
?>


                            <option value="<?php echo $result['id']; ?>"><?php echo $result['folder_name']; ?></option>

<?php }} ?>
                            

                        </select><br><br>
                        
                        <input type="submit" value="Upload">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html> 