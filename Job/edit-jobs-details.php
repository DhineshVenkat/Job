<?php
require_once "connect.php";
$msg = "";
if(isset($_REQUEST['btnSubmit'])) 
    {
        $jobid = $_REQUEST['jobid'];
        $status = $_REQUEST['status'];

        $query = "update jobapply set status='$status' where jobid = '$jobid' ";
        if(mysql_query($query))
        {
        echo '<script language="javascript">';
        echo 'alert("Status Updated Successfully!")';
        echo '</script>';
        header('Refresh: 3; URL = user-applied-list.php');
    }
        else 
        {
        echo '<script language="javascript">';
        echo 'alert("Unable to Save!")';
        echo '</script>';
        }
        header('Refresh: 3; URL = user-applied-list.php');
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
    <h2>Edit Job Status</h2>
    <ul>
    <li>
    <a href="index.php">Home</a>
    </li>
    <li>
    <i class="ico
    <lifont-simple-right"></i>
    </li>>Edit Job Status</li>
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
    <input type="text" name="jobid" value="<?php echo $_REQUEST['jobid'] ?>" style="display: none;">
<label>Select Status</label>
<select class="form-control" required="" name="status">
    <option value="">Select</option>
    <option value="Confirmed">Confirmed</option>
    <option value="Rejected">Rejected</option>
</select>
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