<?php include 'inc/header.php';?> 

    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Posts</h2>
                        <a href="add-new-post.php" class="btn btn-outline-dark" style="padding: 2px 10px;">Add New</a>
                        
                        <div class="posts-info">
                            <div class="float-left">
                                <a href="#">All (<span id="total-posts">6</span>) |</a> 
                                <a href="#">Published (<span id="total-posts-published">6</span>)</a>
                            </div>
                            <div class="float-right">
                                <form>
                                    <input type="search" id="post-search-input" name="" value="">
                                    <input type="submit" id="search-submit" class="button" value="Search Posts">
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="all-posts-table table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col"><i class="fas fa-comment-alt"></i></th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "select * from tbl_blog order by id desc";
                                $category = $db->select($query);
                                if ($category) {
                                    
                                    while ($result = $category->fetch_assoc()) {
                                        
                            ?>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <strong><?php echo $result['title'];?></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="editpost.php?postid=<?php echo $result['id']; ?>">Edit</a>
                                        </span>
                                        <span class="trash">
                                            <a onclick = "return confirm('Are you sure to Delete ?');"href="postdel.php?delid=<?php echo $result['id'];?>">Trash</a>
                                        </span>
                                        <span class="view">
                                            <a href="http://localhost/lucc/single-blog.php?id=<?php echo $result['id']; ?>">View</a> 
                                        </span>
                                    </div>
                                </th>
                                <td><?php echo $result['author'];?></td>
                                <td><a href="#">4</a></td>
                                <td><?php echo $result['date'];?></td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body></html>