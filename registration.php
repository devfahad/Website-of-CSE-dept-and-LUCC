<?php 

include "config/config.php"; 
include "lib/Database.php"; 
include "helpers/Format.php"; 
$db = new Database();
$fm = new Format();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Registration | Leading University Computer Club</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <!-- Revolution CSS -->
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <!-- Owl Carousel CSS-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <!-- Magnific PopUp CSS -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/preset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!--[if IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body id="registration">
<!-- PRELOADER START -->
<!-- <div class="preloader">
    <div class="la-ball-clip-rotate-pulse la-2x">
        <div></div>
        <div></div>
    </div>
</div> -->
<!-- PRELOADER END -->
<div class="form_wrapper">
    <div class="form_container">
        <div class="title_container">
            <h2>Registration Form</h2>
        </div>
        <div class="row">
            <div class="">
                <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname  = $_POST['firstname'];
    $lastname    = $_POST['lastname'];
    $birthday_day   = $_POST['birthday_day'];
    $email   = $_POST['email'];
    $mobile_number   = $_POST['mobile_number'];
    $gender   = $_POST['gender'];
    $student_id   = $_POST['student_id'];
    $department   = $_POST['department'];
    $batch   = $_POST['batch'];
    $committee   = $_POST['committee'];
    $role   = '1';
    $status   = 'Pending';
    $bio   = $_POST['bio'];
    $password   = md5($_POST['password']);
    $image = '';


    if ($firstname == "" || $lastname == "" || $birthday_day == "" || $email == "" || $gender == "" || $student_id == "" || $department == "" || $batch == "" || $password == "") {
        
        echo "<span class='error'>flied must not be empty..!</span>";
    }else{

        $query = "INSERT INTO tbl_user(email, password, first_name, last_name, birthday, mobile_number, gender, student_id, department, batch, committee, role, image, status, bio) 
                          VALUES('$email', '$password', '$firstname', '$lastname', '$birthday_day', '$mobile_number', '$gender', '$student_id', '$department', '$batch', '$committee', '$role', '$image','$status', '$bio')";

        $inserted_rows = $db->insert($query);
        if ($inserted_rows) {
            echo "<span class='success'>Your Registration successful..!<br/> Please wait for Approved by admin. when admin Approve you can login from our website."; 
        }else{
            echo "<span class='error'>Your Registration not successful. Try Again</span>"; 
        }
    }








}

                ?>
                <form action="registration.php" method="post">
                    <div class="row">
                        <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                <input type="text" name="firstname" placeholder="First Name" />
                            </div>
                        </div>
                        <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                <input type="text" name="lastname" placeholder="Last Name" required />
                            </div>
                        </div>
                    </div>
                    <div class="input_field dob">
                        <label>Date of Birth: </label>
                        <select name="birthday_day" id="Birthday_Day">
                            <option value="-1">Day:</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>

                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>

                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>

                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>

                        <select id="Birthday_Month" name="Birthday_Month">
                            <option value="-1">Month:</option>
                            <option value="January">Jan</option>
                            <option value="February">Feb</option>
                            <option value="March">Mar</option>
                            <option value="April">Apr</option>
                            <option value="May">May</option>
                            <option value="June">Jun</option>
                            <option value="July">Jul</option>
                            <option value="August">Aug</option>
                            <option value="September">Sep</option>
                            <option value="October">Oct</option>
                            <option value="November">Nov</option>
                            <option value="December">Dec</option>
                        </select>

                        <select name="Birthday_Year" id="Birthday_Year">

                            <option value="-1">Year:</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>

                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>

                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                        </select>
                    </div>
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                        <input type="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="input_field"> <span><i aria-hidden="true" class="fas fa-mobile-alt"></i></span>
                        <input type="tel" placeholder="Mobile Number"  name="mobile_number" maxlength="15">
                    </div>
                    <div class="input_field radio_option">
                        <input type="radio" name="gender" id="rd1">
                        <label for="rd1">Male</label>
                        <input type="radio" name="gender" id="rd2">
                        <label for="rd2">Female</label>
                    </div>
                    <div class="input_field"> <span><i aria-hidden="true" class="fas fa-id-card-alt"></i></span>
                        <input type="text" placeholder="Student ID"  name="student_id" required>
                    </div>
                    <div class="input_field select_option">
                        <select name="department" required>
                            <option value="">Department</option>
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                            <option value="BBA">BBA</option>
                            <option value="MBA">MBA</option>
                            <option value="ENG">ENG</option>
                            <option value="LLB">LLB</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                    <div class="input_field select_option">
                        <select name="batch" required>
                            <option value="">Batch</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="31">32</option>
                            <option value="31">33</option>
                            <option value="31">34</option>
                            <option value="31">35</option>
                            <option value="31">36</option>
                            <option value="31">37</option>
                            <option value="31">38</option>
                            <option value="31">39</option>
                            <option value="31">40</option>
                            <option value="31">41</option>
                            <option value="31">42</option>
                            <option value="31">43</option>
                            <option value="31">44</option>
                            <option value="31">45</option>
                            <option value="31">46</option>
                            <option value="31">47</option>
                            <option value="31">48</option>
                            <option value="31">49</option>
                            <option value="31">50</option>
                            <option value="31">51</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                    <div class="input_field select_option">
                        <select name="committee" required>
                        <option value="">Committee</option>
<?php
$query = "select * from tbl_committeelist";
$category = $db->select($query);
if ($category) {
while ($result = $category->fetch_assoc()) {

?>
                          <option value="<?php echo $result['title']?>"><?php echo $result['title']?></option>
<?php } } ?>
                            
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                    <div class="input_field">
                        <textarea name="bio" placeholder="Bio" required></textarea>
                    </div>
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Re-type Password" required />
                    </div>
                    <div class="input_field checkbox_option">
                        <input name="terms" type="checkbox" id="cb1">
                        <label for="cb1">I agree with terms and conditions</label>
                    </div>
                    <input class="button" type="submit" value="Register" />
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS -->
<script src="js/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Revolution JS -->
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<!-- Owl Carousel JS -->
<script src="js/owl.carousel.js"></script>
<!-- Magnific PopUp JS -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Appear JS for counter -->
<script src="js/jquery.appear.js"></script>

<script src="js/tilt.jquery.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<!-- Custom JS -->
<script src="js/theme.js"></script>

</body>
</html>