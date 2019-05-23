<?php include 'inc/header.php';?>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
            <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2 style="font-size: 1.5em;">Pay through bKash Number (Personal) : 01766072127</h2>
                    </div>
<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = mysqli_real_escape_string($db->link, $_POST['name']);
        $bkash = mysqli_real_escape_string($db->link, $_POST['bkash']);
        $transaction = mysqli_real_escape_string($db->link, $_POST['transaction']);
        $amount = mysqli_real_escape_string($db->link, $_POST['amount']);
        $commnet = mysqli_real_escape_string($db->link, $_POST['commnet']);
        $status ='Pending';


        if($name == "" || $bkash == "" || $transaction == "" || $amount == "" ){
                echo "<span style='color:red;font-size:18px;'>Field must not be empty!!.</span>";
            
        }else{
                
                $query = "INSERT INTO tbl_payment(name, bkash_no, transactin_id, amount, comment, status ) VALUES('$name', '$bkash', '$transaction', '$amount', '$commnet', '$status')";
                
                $inserted_rows = $db->insert($query);
                if ($inserted_rows) {
                    echo "<span style='color:green;font-size:18px;'>Transition Successfully.</span>";
                
                }else {
                    echo "<span style='color:red;font-size:18px;'>Transition Not Successfully !</span>";
                }
        }


        }
    ?>

                    <form id="edit-profile" action="user-payment.php" method="post"> 

                        <label>Type Your name here (required)</label>
                        <input type="text" name="name" required><br>
                        
                        <label>Your bKash No (required)</label>
                        <input type="text" name="bkash" required><br>
                        
                        <label>Transaction ID (required)</label>
                        <input type="text" name="transaction" required><br>
                        
                        <label>Total (required)</label>
                        <input type="text" name="amount" required><br>
                        
                        <label style="vertical-align: top;">Comment</label>
                        <textarea name="commnet" id="" rows="5" required></textarea><br>
                        
                        
                        <input type="submit"  name="submit" value="Proceed">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body></html>