<?php include 'inc/header.php';?> 
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header py-4">
                        <h2>Add New Event</h2>
                        <?php
                            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $title = mysqli_real_escape_string($db->link, $_POST['title']);
                            $eventdate = mysqli_real_escape_string($db->link, $_POST['eventdate']);
                            $body = mysqli_real_escape_string($db->link, $_POST['body']);
                            $permited  = array('jpg', 'jpeg', 'png', 'gif');
                            $file_name = $_FILES['image']['name'];
                            $file_size = $_FILES['image']['size'];
                            $file_temp = $_FILES['image']['tmp_name'];

                            $div = explode('.', $file_name);
                            $file_ext = strtolower(end($div));
                            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                            $uploaded_image = "upload/".$unique_image;
                            
                            if($title == "" || $file_name == "" || $eventdate == "" || $body == "" ){
                                 echo "<span style='color:red;font-size:18px;'>Field must not be empty!!.</span>";
                             
                            }elseif ($file_size >1048567) {
                                 echo "<span style='color:red;font-size:18px;'>Image should be less than 1 mb.</span>";
                                
                            } elseif (in_array($file_ext, $permited) === false) {
                                 echo "<span style='color:red;font-size:18px;'>You can upload only:-".implode(', ', $permited)."</span>";

                                
                            } else{
                                    move_uploaded_file($file_temp, $uploaded_image);
                                    $query = "INSERT INTO tbl_event(title, body, image, event_date) VALUES('$title', '$body', '$uploaded_image', '$eventdate')";
                                    
                                    $inserted_rows = $db->insert($query);
                                    if ($inserted_rows) {
                                     echo "<span style='color:green;font-size:18px;'>Event Inserted Successfully.</span>";
                                    
                                    }else {
                                     echo "<span style='color:red;font-size:18px;'>Event Not Inserted !</span>";
                                    }
                            }


                            }
                        ?>
                    </div>
                    <form id="add-new-event" action="add-new-event.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="title" placeholder="Enter Title Here"><br>
                        <label for="imageUpload" class="btn btn-primary mt-2">Add Media</label>
                        <input type="file" name="image" id="imageUpload" accept="image/*"><br>
                        <label style="color: #000;">Select Date</label>
                        <input type="date" name="eventdate" id="eventDate">
                        <textarea name="body" id="mytextarea"></textarea>
                        <input type="submit" value="Publish">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.js"></script>
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=khxv757q1gwi187q7j2uttovisykmopxvy3i7k5qlqfnq0wk">
    </script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink link lists image charmap print preview anchor textcolor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code help'
            ],
            toolbar: 'insert | undo redo | styleselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent '
        });
    </script>
</body>

</html>