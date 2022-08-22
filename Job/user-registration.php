<?php
require_once "connect.php";
$msg = "";
if(isset($_REQUEST['btnSubmit'])) 
    {
        $sname = $_REQUEST['sname'];
        $email = $_REQUEST['email'];
        $dob = $_REQUEST['dob'];
        $mobile = $_REQUEST['mobile'];
        $address = $_REQUEST['address'];
        $gender = $_REQUEST['gender'];
        $uername = $_REQUEST['uername'];
        $password = $_REQUEST['password'];

        $query = "insert into jobseeker (sname,email,dob,mobile,address,gender,username,password) values ('$sname','$email','$dob','$mobile','$address','$gender','$uername','$password')";
        if(mysql_query($query))
        {
        echo '<script language="javascript">';
        echo 'alert("Registered Successfully!")';
        echo '</script>';
        } 
        else 
        {
        echo '<script language="javascript">';
        echo 'alert("Unable to Save!")';
        echo '</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/icofont.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/fonts/flaticon.css">

<link rel="stylesheet" href="assets/css/odometer.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">
<?php
include "header.php";
?>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<?php
include "menu.php";
?>


</div>
</nav>
</div>
</div>
</div>


<div class="page-title-area">
    <div class="d-table">
    <div class="d-table-cell">
    <div class="container">
    <div class="page-title-text">
    <h2>Job Seeker Registration</h2>
    <ul>
    <li>
    <a href="index.php">Home</a>
    </li>
    <li>
    <i class="icofont-simple-right"></i>
    </li>
    <li>Job Seeker Registration</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
</div>


<div class="create-account-area pt-100 pb-100">
<div class="container">
<div class="create-photo">
<div class="already-create">
<span>Already create an account?</span>
<a href="user-login.php">Sign In</a>
</div>

</div>
<div class="create-information">
<form method="post">
<h3>Basic Information</h3>

<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label>Your Name</label>
<input type="text" class="form-control" required="" name="sname">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Your Email</label>
<input type="email" class="form-control" required="" name="email">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Date of Birth</label>
<input type="date" class="form-control" required="" name="dob">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Your Phone</label>
<input type="text" class="form-control" required="" name="mobile" maxlength="10">
</div>
</div>


<div class="col-lg-6">
<div class="form-group">
<label>Address:</label>
<input type="text" class="form-control" required="" name="address">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<div class="gender-area">
<span>Gender</span>
 <input type="radio" name="gender" value="male" checked required="">
<label for="male">Male</label>
<input type="radio" name="gender" value="female">
<label for="female">Female</label>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Username</label>
<input type="text" class="form-control" required="" name="uername">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" required="" name="password">
</div>
</div>
</div>

</div>


<div class="text-left">
<button type="submit" class="btn create-ac-btn" name="btnSubmit">Submit</button>
</div>
</div>
</div>
</form>

<footer>
<?php
include "footer.php";
?>
</footer>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/jquery.mixitup.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>

<script src="assets/js/custom.js"></script>
</body>
</html>