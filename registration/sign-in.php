






<?php 


session_start();

?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:orange;">
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
      <li><a href="sign-up.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-user"></span>sign-up</button></a></li>
      <li><a href="#"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-log-in"></span>..Login</button></a></li>

    </ul>
  </div>
</nav>

<h1 style="text-align:center;color:green;">welocome to login page</h1>
<form action="sign-in.php" method="post">

<table border="5" align="center" width="500" style="background-color:teal;padding:10px">
<caption style="text-align:center;font-size:200%"><b><span style="color:white">sign-in page</span></b></caption>
<tr>
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
<input type="submit" name="login" value="login">
</td>
</tr>
</table>
</form>
<h2 style="text-align:center;">don't have account <a href="sign-up.php">sign-up here</a></h2>
</body>
</html>
<?php


mysql_connect("localhost","root","");
mysql_select_db("oes");

if(isset($_POST['login'])){
	$email2=$_POST['email'];
	$password2=$_POST['pass'];
	
	$check="select * from user where user_email='$email2' AND user_pass='$password2'";
	$run=mysql_query($check);
	
	if(mysql_num_rows($run)>0){
		
		setcookie('email',$email2,time()+60*60);
		setcookie('pass',$password2,time()+60*60);
		
		$_SESSION['email']=$email2;
		echo "<script>window.open('user/home.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('email or password is incorrect')</script>";
		
	}
	
	
	
	
}











?>