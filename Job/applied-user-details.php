<?php
ob_start();
session_start(); 
$username=$_SESSION['username'];
include('connect.php');
error_reporting(E_ERROR | E_PARSE);
$jsusername = isset($_REQUEST['jsusername']) ? $_REQUEST['jsusername'] : "0";
$query = "select * from jobseeker where username='$jsusername'";
$data = mysql_query($query);
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
include "company-menu.php";
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
    <h2>Applied Jobs</h2>
    <ul>
    <li>
    <a href="index.php">Home</a>
    </li>
    <li>
    <i class="icofont-simple-right"></i>
    </li>
    <li>Applied Jobs</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
</div>


<div class="create-account-area pt-100 pb-100">
<div class="container">

<div class="create-information">
<form method="post">

<div class="row">
<div class="col-lg-12">
<div class="form-group">
<table class="table table-hover table-striped" border="1">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date of Birth</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                    </tr>
                                     <?php while($rec = mysql_fetch_array($data)) { ?>
                               
                                        <tr>
                                            <td><?php echo $rec['sname']; ?></td>
                                            <td><?php echo $rec['email']; ?></td>
                                            <td><?php echo $rec['dob']; ?></td>
                                            <td><?php echo $rec['mobile']; ?></td>
                                            <td><?php echo $rec['address']; ?></td>
                                            <td><?php echo $rec['gender']; ?></td>
                                            
                                        </tr>
                                         <?php } ?>
        
                                        
                                    
                                   
                                </table>
</div>
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