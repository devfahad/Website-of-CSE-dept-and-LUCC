<?php include 'inc/header.php';?>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>LUCC Committee Lists</h2>
                        <?php 

        if (isset($_GET['delid'])) {
        	$catdel = $_GET['delid'];

        	$delquery = "DELETE FROM tbl_committeelist WHERE id='$catdel'";
            $catagorydel = $db->delete($delquery);
            if ($catagorydel) {
                echo "<span class='success'>commitee Deleted Successfully..!</span>"; 
            }else{
                echo "<span class='success'>commitee Not Deleted.</span>"; 
                }
        }

        ?>


                        <a href="add-new-committee.php" class="btn btn-outline-dark" style="padding: 2px 10px;">Add New</a>
                        <div class="posts-info">
                            <div class="float-left">
                               <!--  <a href="#">All (<span id="total-committee-number">4</span>)</a>  -->
                            </div>
                            <div class="float-right">
                                <form>
                                    <input type="search" id="post-search-input" name="" value="">
                                    <input type="submit" id="search-submit" class="button" value="Search Users">
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="all-posts-table table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Year</th>
                            </tr>
                        </thead>
                        <tbody>

<?php 
$query = "select * from tbl_committeelist order by id desc";
$committee = $db->select($query);
if ($committee) {
while ( $result = $committee->fetch_assoc()) {

?>

                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <strong><a href="#"><?php echo $result['title'] ;?></a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="editcommi.php?commiid=<?php echo $result['id']; ?>">Edit</a>
                                        </span>
                                        <!-- <span class="view">
                                            <a href="../committee-2019.html">View</a>
                                        </span> -->
                                        <span class="trash">
                                        <a onclick="return confirm('are you sure to delete!')" href="?delid=<?php echo $result['id'];?>">Trash</a>
                                        </span>
                                    </div>
                                </th>
                            </tr>
<?php } } ?>
                            
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>