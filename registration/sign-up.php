
<!doctype html>
<html>
<head>
<title>registration</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background-color:orange">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php"><span style="color:green; font-size:120%;">online examination</span></a>
    </div>
	<ul class="nav navbar-nav">
	<li style="font-size:150%"><a href="../index.php">home</a></li>
	<li style="font-size:150%"><a href="#">about-us</a><li>
	</ul>
	
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-user"></span>sign-up</button></a></li>
      <li><a href="sign-in.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-log-in"></span>..Login</button></a></li>

    </ul>
  </div>
</nav>

<form action="sign-up.php" method="post">

<table border="5" align="center" width="500" style="background-color:teal;padding:10px">
<caption style="text-align:center;font-size:200%"><b><span style="color:white">sign-up page</span></b></caption>
<tr>
<td><b>Name</b></td>
<td><input type="text" name="name" placeholder="enter your name" size="45"></td>
</tr>
<tr>
<td><b>Email</b></td>
<td><input type="text" name="email" placeholder="enter your email" size="45"></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" name="pass"  placeholder="enter your password" size="45"></td>
</tr>
<tr><td></td>
<td>
<input type="submit" name="submit" value="sign-up">
</td>
</tr>
</table>
</form>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("oes");
if(isset($_POST['submit'])){
	$name1=$_POST['name'];
	$email1=$_POST['email'];
	$password1=$_POST['pass'];
	if($name1=='' OR $email1=='' OR $password1==''){
		echo "<script>alert('fill in the all field')</script>";
		exit();
	}
	
	$check_email="select * from user where user_email='$email1'";
	$run=mysql_query($check_email);
	if(mysql_num_rows($run)>0){
		
		echo "<script>alert('this email already exist!!! plzz try another')</script>";
		exit();
	}
	else {
		$insert_post="insert into user(user_name,user_email,user_pass)values('$name1','$email1','$password1')";
		$run_post=mysql_query($insert_post);
	
		echo "<script>window.open('sign-in.php','_self')</script>";

	}
}

?>
