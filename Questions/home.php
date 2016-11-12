<?php
session_start();
if(!$_SESSION['email']){
	
	header("location:logout.php");
}

?>

<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>


<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"><span style="color:green; font-size:120%;">online examination</span></a>
    </div>
	<ul class="nav navbar-nav">
	
	<li style="font-size:150%"><a href="result.php">Result</a><li>
	<li style="font-size:150%"><a href="#">About-us</a><li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
	<li style="font-size:150%"><a href="#"><?php echo $_SESSION['email'] ?></a></li>
	<li style="font-size:150%"><a href="logout.php">Logout</a></li>
	</ul>
    
  </div>
</nav>

<div class="row">
<div class="col-md-7">
<!-- question content -->
<div style="width:700px;">
<div class="row">
<!-- bank question -->
<div class="col-md-4">
<div class="list-group">
 <center> 
  <a href="#" class="list-group-item active">DSA</a>
  <a href="dsa.php" class="list-group-item">practice paper 1</a>
  <a href="#" class="list-group-item">practice paper 2</a>
  <a href="#" class="list-group-item">practice paper 3</a>
  <a href="#" class="list-group-item active">more practice paper</a>
  </center>
</div>
</div>
<!-- BANK english -->
<div class="col-md-4">
<div class="list-group">
 <center> 
  <a href="#" class="list-group-item active"> operating system</a>
  <a href="os.php" class="list-group-item">practice paper 1</a>
  <a href="#" class="list-group-item">practice paper 2</a>
  <a href="#" class="list-group-item">practice paper 3</a>
  <a href="#" class="list-group-item active">more practice paper</a>
  </center>
</div>
</div>

<!-- BANK reasoning -->
<div class="col-md-4">
<div class="list-group">
 <center> 
  <a href="#" class="list-group-item active">java</a>
  <a href="java.php" class="list-group-item">practice paper 1</a>
  <a href="#" class="list-group-item">practice paper 2</a>
  <a href="#" class="list-group-item">practice paper 3</a>
  <a href="#" class="list-group-item active">more practice paper</a>
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
  <a href="#" class="list-group-item active"><b>CAT APTITUDE</b></a>
  <a href="#" class="list-group-item">practice paper 1</a>
  <a href="#" class="list-group-item">practice paper 2</a>
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
  <a href="#" class="list-group-item active"><b>CAT ENGLISH </b></a>
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
  <a href="#" class="list-group-item active"><b>CAT REASONING</b></a>
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
<div class="col-md-2">
<img src="../../images/ad1.jpg">
</div>
</div>