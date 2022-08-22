<?php
ob_start();
session_start(); 
$username=$_SESSION['username'];
include('connect.php');
error_reporting(E_ERROR | E_PARSE);
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "0";
$query = "select * from job where id='$id'";
$data = mysql_query($query);

if(isset($_REQUEST['jobSubmit'])) 
    {
        $jobid = $_REQUEST['jobid'];
        $cusername = $_REQUEST['cusername'];
        $jsusername = $_REQUEST['jsusername'];
        
        $query = "insert into jobapply (jobid,cusername,jsusername,status) values ('$jobid','$cusername','$jsusername','Waiting')";
        if(mysql_query($query))
        {
        echo '<script language="javascript">';
        echo 'alert("Job Applied Successfully!")';
        echo '</script>';
        } 
        else 
        {
        echo '<script language="javascript">';
        echo 'alert("Unable to Apply!")';
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
<title>Job Portal</title>
<link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>

<?php
include "header.php";
?>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<?php
include "user-menu.php";
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
<h2>Job List</h2>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>
<i class="icofont-simple-right"></i>
</li>
<li>Job List</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="blog-details-area ptb-100">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="blog-details-item">
<div class="blog-details-img">

<?php while($rec = mysql_fetch_array($data)) { ?>
<ul>
    <h3>Job Title</h3>
     <a href="#"><?php echo $rec['jobtitle']; ?></a>
     <br><br>
     <h3>Job Categories</h3>
     <a href="#"><?php echo $rec['categories']; ?></a>
     <br><br>
     <h3>Skills Required</h3>
     <a href="#"><?php echo $rec['skills']; ?></a>
     <br><br>
     <h3>Job Finish Last Date</h3>
<li>
<i class="icofont-calendar"></i>
 <?php echo $rec['ldate']; ?>
</li><br><br>
<h3>Budget</h3>
     <a href="#"><?php echo $rec['budget']; ?></a>
     <br><br>

<h3>Company Username</h3>
<li>
<i class="icofont-user-alt-7"></i>
<a href="#"><?php echo $rec['username']; ?></a>
</li><br><br>
</ul>
<h3>Description</h3>
<p><?php echo $rec['description']; ?></p>

<div class="blog-details-form">
<div class="text-left">
    <form method="post">
        <div class="form-group">
<label style="color:#000">Your Username</label>

<input type="text" class="form-control" value="<?php echo $rec['id']; ?>" name="jobid" style="display: none;">
<input type="text" class="form-control" value="<?php echo $rec['username']; ?>" name="cusername" style="display: none;">
<input type="text" class="form-control" required="" name="jsusername">
</div>
<input type="submit" name="jobSubmit" class="btn blog-details-btn" value="Apply for this work">
</form>
</div> 
</div>
<hr>
<?php } ?>
</div>



</div>
</div>
<div class="col-lg-4">
<div class="blog-details-item">
<div class="single-resume-category">
<h3>Job Categories</h3>
<ul>
<form method="post" action="job-list-categories.php">
<select name="categories" id='categories' required class="form-control">
                  
                          <option value="" >Select Categories </option>         
                            <?PHP 
                                $sql=mysql_query("SELECT DISTINCT categories FROM job"); 
                                while ($row = mysql_fetch_object($sql)) {  
                                
                                echo  "<option value= \"$row->categories\">$row->categories</option>" ; 
                                } 
                                ?> 
                                 
                        </select><br>

                        <div class="blog-details-form">
<div class="text-left">
<input type="submit" class="btn blog-details-btn" value="Submit" name="submit">

</div> 
</div>
</form>
</ul>
</div>

</div>
</div>
</div>
</div>
</div>


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