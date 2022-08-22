<?php
require_once "connect.php";
$msg = "";
if(isset($_REQUEST['btnSubmit'])) 
    {
        $userid = $_REQUEST['userid'];
        $tdate = $_REQUEST['tdate'];
        $jobid = $_REQUEST['jobid'];
        $amount = $_REQUEST['amount'];
        $cusername = $_REQUEST['cusername'];

        $query = "insert into fund (userid,tdate,jobid,amount,cusername) values ('$userid','$tdate','$jobid','$amount','$cusername')";
        if(mysql_query($query))
        {
        echo '<script language="javascript">';
        echo 'alert("Fund Transfer Successfully!")';
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
    <h2>Fund Trasfer</h2>
    <ul>
    <li>
    <a href="index.php">Home</a>
    </li>
    <li>
    <i class="icofont-simple-right"></i>
    </li>
    <li>Fund Trasfer</li>
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
<div class="col-lg-6">
<div class="form-group">
<label>User ID</label>
<select name="userid" class="form-control" required>
                  
                          <option value="" >Select User ID </option>         
                            <?PHP 
                                $sql=mysql_query("SELECT DISTINCT jsusername FROM jobapply"); 
                                while ($row = mysql_fetch_object($sql)) {  
                                
                                echo  "<option value= \"$row->jsusername\">$row->jsusername</option>" ; 
                                } 
                                ?> 
                                 
                        </select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Date</label>
<input type="date" class="form-control" required="" name="tdate">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Job ID</label>
<input type="text" class="form-control" required="" name="jobid">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Amount</label>
<input type="text" class="form-control" required="" name="amount">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Company Username</label>
<input type="text" class="form-control" required="" name="cusername">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Card Number</label>
<input type="text" class="form-control" required="" name="cardno">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Expire Date</label>
<input type="text" class="form-control" required="" name="edate" placeholder="Ex:10/2021">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>CVV Number</label>
<input type="text" class="form-control" required="" name="cvv" maxlength="3">
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