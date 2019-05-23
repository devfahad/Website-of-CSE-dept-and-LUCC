<?php include 'inc/header.php';?>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Your Transaction History</h2>
                        
                        <div class="posts-info">
                            <div class="float-left">
                                <!-- <a href="#">All (<span id="total-transaction">16</span>) |</a> 
                                <a href="#">Pending (<span id="total-transaction-pending">6</span>) |</a>
                                <a href="#">Completed (<span id="total-transaction-completed">10</span>)</a> -->
                            </div>
                            <!--<div class="float-right">
                                <form>
                                    <input type="search" id="post-search-input" name="" value="">
                                    <input type="submit" id="search-submit" class="button" value="Search Posts">
                                </form>
                            </div>-->
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