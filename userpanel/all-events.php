<?php include 'inc/header.php';?>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Events</h2>
                        <a href="add-new-event.php" class="btn btn-outline-dark" style="padding: 2px 10px;">Add New</a>
                        
                        <div class="posts-info">
                            <div class="float-left">
                                <!-- <a href="#">All (<span id="total-events">4</span>)</a>  -->
                            </div>
                            
                        </div>
                    </div>
                    <table class="all-posts-table table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col"><i class="fas fa-comment-alt"></i></th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $query = "select * from tbl_event order by id desc";
                                $category = $db->select($query);
                                if ($category) {
                                    $i = 0;
                                    while ($result = $category->fetch_assoc()) {
                                        $i++;
                            ?>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <strong><a href="#"><?php echo $result['title'];?></a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="editevent.php?eventid=<?php echo $result['id']; ?>">Edit</a>
                                        </span>
<!--
                                        <span class="trash">
                                            <a href="eventdel.php?delid=<?php echo $result['id'];?>">Trash</a>
                                        </span>
-->
                                        <span class="view">
                                            <a href="#">View</a>
                                        </span>
                                    </div>
                                </th>
                                <td><a href="#">Fahad</a></td>
                                <td><a href="#">4</a></td>
                                <td>2018/12/13</td>
                                <td>2018/12/13</td>
                            </tr>
                            <?php } } ?>
                            
                            
                             
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body></html>