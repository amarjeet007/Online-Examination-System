<?php 
session_start();
?>



<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <title>admin login </title>
</head>
<body>

<div class="container">
  <h2>Admin login</h2>
  
  <form action="admin_login.php" method="post">
    <div class="form-group">
      <label for="name">NAME</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>
	 <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password">
    </div>
   
    <button type="submit" name="login"class="btn btn-default">login</button>
  </form>
</div>

</body>
</html>
<?php


$conn=mysql_connect("localhost","root","");
mysql_select_db("oes");

if(isset($_POST['login'])){
	$name2=$_POST['name'];
	$email2=$_POST['email'];
	$password2=$_POST['pwd'];
	
	$check="select * from admin where admin_email='$email2' AND admin_pass='$password2'";
	$run=mysql_query($check);
	
	if(mysql_num_rows($run)>0){
		
		
		
		$_SESSION['name1']=$name2;
		echo "<script>window.open('home_admin.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('email or password is incorrect')</script>";
		
	}
	
	
	
	
}
mysql_close($conn)
?>