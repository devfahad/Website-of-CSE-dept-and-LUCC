<?php include 'inc/header.php';?>
    <section class="dashboard"> 
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Add New Committee</h2>
                        
                    </div>

                    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $title = $fm->validation($_POST['title']); 
    $title = mysqli_real_escape_string($db->link, $title);

    if (empty($title)) {
        echo "<span class='error'>flied must not be empty..!</span>";
    }else{
        $query = "INSERT INTO tbl_committeelist(title) VALUES('$title') ";
        $Commiinsert = $db->insert($query);
        if ($Commiinsert) {
                echo "<span style='color:green;font-size:18px;' class='success'>Committee Inserted Successfully..!</span>"; 
        }else{
                echo "<span style='color:red;font-size:18px;' class='error'>Committee Not Inserted.</span>"; 
        }
        
    }

    }
?>
                    
                    <form id="add-committee-title" action="" method="post">
                        <label>Enter the title</label>
                        <input type="text" name="title" placeholder="Enter Title Here">
                        <input type="submit" value="Enter">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>