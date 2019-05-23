<?php include 'inc/header.php';?>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Transaction History</h2>
                        <?php 


if(isset($_POST['approved'])){

    $status ='Approved';
    $id = $_POST['userid'];

    $query = " UPDATE `tbl_payment` 
            SET 
            `status`='$status'
            WHERE id='$id'
        ";

        $updated_row = $db->update($query);
        if ($updated_row) {
        echo "<span style='color:green;font-size:18px;' class='success'>Payment Approved</span>"; 
        }else{
        echo "<span style='color:red;font-size:18px;' class='error'>Payment Not Approved. Try Again</span>"; 
        }


}

if(isset($_POST['reject'])){

    $status ='Approved';
    $id = $_POST['userid'];

    

    $delquery = "DELETE FROM tbl_payment WHERE id='$id'";
    $catagorydel = $db->delete($delquery);
    if ($catagorydel) {
        echo "<span class='success'>Payment Deleted Successfully..!</span>"; 
    }else{
        echo "<span class='success'>Payment Not Deleted.</span>"; 
        }
    





}

?> 
                        
                        <div class="posts-info">
                            <div class="float-left">
                                <!-- <a href="#">All (<span id="total-transaction">16</span>) |</a> 
                                <a href="#">Pending (<span id="total-transaction-pending">6</span>) |</a>
                                <a href="#">Completed (<span id="total-transaction-completed">10</span>)</a> -->
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
                                <th scope="col">Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">BKash No</th>
                                <th scope="col">Transaction ID</th>
                                <th scope="col">Total (TK)</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
<?php
    $query = "select * from tbl_payment order by id desc";
    $payment = $db->select($query);
    if ($payment) {
        
        while ($result = $payment->fetch_assoc()) {
            
?>
                                <th scope="row"><input type="checkbox">
                                    <strong><a href="#"><?php echo $result['name'] ?></a></strong>
                                </th>
                                <td><a href="#"><?php echo $result['date'] ?></a></td>
                                <td><a href="#"><?php echo $result['bkash_no'] ?></a></td>
                                <td><?php echo $result['transactin_id'] ?></td>
                                <td><?php echo $result['amount'] ?></td>
                                <td style="color:green;"><?php echo $result['status'] ?></td>
                                <td>
                                <form action="" method="post">
                                  <input type="hidden" name="userid" value="<?php echo $result['id'] ?>" />
                                  <button class="pending-action" type="submit" name="approved">Confirm</button>/
                                  <button class="pending-action" type="submit" name="reject">Reject</button>
                                </form>
                                
                                
                                </td>
                            </tr>
        <?php }}?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body></html>