<?php 
include "../lib/session.php";  
Session::checkSession();
?>
<?php include "../config/config.php"; ?>
<?php include "../lib/Database.php"; ?>
<?php include "../helpers/Format.php"; ?>

<?php 
$db = new Database();
$fm = new Format();
?>

<?php
if (!isset($_GET['delid']) || $_GET['delid'] == null ) {
   header("Location: all-posts.php");
}else{
   $delid = $_GET['delid'];

   $query = "select * from tbl_blog where id='$delid'";
   $getpost = $db->select($query);
   if ($getpost) {
   	while ($delimg = $getpost->fetch_assoc()) {
   		$dellink = $delimg['image'];
   		unlink($dellink);

   	}
   }

   $delquery = "delete from tbl_blog where id='$delid'";
   $delpost = $db->delete($delquery);
   if ($delpost) {
   	  echo "<script>alert('Post Deleted Succesfully..!');</script>";
   	  echo "<script>window.location = 'all-posts.php';</script>";
   }else{
   	  echo "<script>alert('Post Not Deleted.');</script>";
   	  echo "<script>window.location = 'all-posts.php';</script>";
   }

}

?>