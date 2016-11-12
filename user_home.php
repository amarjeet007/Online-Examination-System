<?php
session_start();
if(!$_SESSION['email']){
	
	header("location:index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="boot_includes/css/bootstrap.min.css">
  <script src="boot_includes/js/jquery.min.js"></script>
  <script src="boot_includes/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="user_home.php"><span style="color:green; font-size:120%;">Online Examination</span></a>
    </div>
	<ul class="nav navbar-nav">
<!--	<li style="font-size:150%"><a href="#">Profile</a></li>-->
	<li style="font-size:150%"><a href="Questions/result.php">Result</a><li>
	<li style="font-size:150%"><a href="#">About-us</a><li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
	<li style="font-size:150%"><a href="#"><?php echo $_SESSION['email'] ?></a></li>
	<li style="font-size:150%"><a href="logout.php">Logout</a></li>
	</ul>
    
  </div>
</nav>
<div class="container-fluid">
<div class="row">
<div class="col-md-7">
<!-- question content -->
<div style="width:700px;">
<div class="row">
<!-- bank question -->
<div class="col-md-4">
<div class="list-group">
 <center> 
  <a href="#" class="list-group-item active">C++</a>
  <a href="Questions/cpp_set1.php" class="list-group-item">practice paper 1</a>
  <a href="Questions/cpp_set2.php" class="list-group-item">practice paper 2</a>
  <a href="#" class="list-group-item">practice paper 3</a>
  <a href="#" class="list-group-item">practice paper 4</a>
  <a href="#" class="list-group-item">practice paper 5</a>
 
  </center>
</div>
</div>
<!-- BANK english -->
<div class="col-md-4">
<div class="list-group">
 <center> 
  <a href="#" class="list-group-item active">JAVA</a>
  <a href="Questions/java_set1.php" class="list-group-item">practice paper 1</a>
  <a href="Questions/java_set2.php" class="list-group-item">practice paper 2</a>
  <a href="#" class="list-group-item">practice paper 3</a>
  <a href="#" class="list-group-item">practice paper 4</a>
  <a href="#" class="list-group-item">practice paper 5</a>
  
  </center>
</div>
</div>

<!-- BANK reasoning -->
<div class="col-md-4">
<div class="list-group">
 <center> 
  <a href="#" class="list-group-item active">Operating System</a>
  <a href="Questions/os_set1.php" class="list-group-item">practice paper 1</a>
  <a href="Questions/os_set2.php" class="list-group-item">practice paper 2</a>
  <a href="#" class="list-group-item">practice paper 3</a>
  <a href="#" class="list-group-item">practice paper 4</a>
  <a href="#" class="list-group-item">practice paper 5</a>

  </center>
</div>
</div> 

</div>
<!-- end of bank question -->

<!-- start of Cat question -->
<div class="row">
<!-- CAT aptitude -->
<div class="col-md-4">
<div class="list-group">
 <center> 
  <a href="#" class="list-group-item active"><b>DSA</b></a>
  <a href="Questions/dsa_set1.php" class="list-group-item">practice paper 1</a>
  <a href="Questions/dsa_set2.php" class="list-group-item">practice paper 2</a>
  <a href="#" class="list-group-item">practice paper 3</a>
  <a href="#" class="list-group-item">practice paper 4</a>
  <a href="#" class="list-group-item">practice paper 5</a>
  <a href="#" class="list-group-item active">more practice paper</a>
  </center>
</div>
</div>
<!-- CAT english -->
<div class="col-md-4">
<div class="list-group">
 <center> 
  <a href="#" class="list-group-item active"><b>Aptitude</b></a>
  <a href="#" class="list-group-item">practice paper 1</a>
  <a href="#" class="list-group-item">practice paper 2</a>
  <a href="#" class="list-group-item">practice paper 3</a>
  <a href="#" class="list-group-item">practice paper 4</a>
  <a href="#" class="list-group-item">practice paper 5</a>
  <a href="#" class="list-group-item active">more practice paper</a>
  </center>
</div>
</div>
<!-- CAT reasoning -->
<div class="col-md-4">
<div class="list-group">
 <center> 
  <a href="#" class="list-group-item active"><b>Reasoning</b></a>
  <a href="#" class="list-group-item">practice paper 1</a>
  <a href="#" class="list-group-item">practice paper 2</a>
  <a href="#" class="list-group-item">practice paper 3</a>
  <a href="#" class="list-group-item">practice paper 4</a>
  <a href="#" class="list-group-item">practice paper 5</a>
  <a href="#" class="list-group-item active">more practice paper</a>
  </center>
</div>
</div>

</div>
<!-- end of cat question -->
</div>
</div>
<!-- for notification -->
<div class="col-md-3">
<div class="list-group">
 <center> 
  <a href="#" class="list-group-item list-group-item-danger"><b>NOTIFICATION</b></a>
  <a href="#" class="list-group-item">notification 1</a>
  <a href="#" class="list-group-item">notification 2</a>
  <a href="#" class="list-group-item">notification 3</a>
  <a href="#" class="list-group-item">notification 4</a>
  <a href="#" class="list-group-item">notification 5</a>
  <a href="#" class="list-group-item list-group-item-danger"> want to know more</a>
  </center>
</div>
</div>

<!-- advertisement -->

</div>
</div>