
<?php 
session_start();
if($_SESSION['email']){
  header("location:user_home.php");
}
?>




<!doctype html>
<html lang="en">
<head>
  <title>Online Examination</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="boot_includes/css/bootstrap.min.css">
  <script src="boot_includes/js/jquery.min.js"></script>
  <script src="boot_includes/js/bootstrap.min.js"></script>

</head>
<body>

<?php
include("includes/navigation_bar.php");  
?>
<br><br>


<!-- heading part -->
<div class="container-fluid">
<h1>Welcome to Online Examination System</h1>
<div class="row">
  <div class="col-sm-6 col-md-6">
    <img src="images/images5.jpg" height="405px">
  </div>

  <div class="col-sm-6 col-md-6">
  <br><br>
<?php include("modal.php");?>  
  <br><br>
  <br><br>
  </div>

<div class="row">
 <div class="well col-md-6 col-sm-6 col-lg-6">
  <h3><marquee>Latest Updates</marquee></h3><br>
  <ul>
    <li>New Questions Added for Data Structures & Algorithms</li>
    <li>New Java Questions added based on JAVA 8 (jdk1.8.0)</li>
  </ul>
  </div>
</div>

</div>

</div>
<hr>
<!-- crousel -->
<!-- content -->
</body>
<?php include("includes/footer.php"); ?>
</html>
