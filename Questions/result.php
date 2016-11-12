<?php
session_start();
if(!$_SESSION['email']){
	
	header("location:logout.php");
}

?>

<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 
</head>


<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../user_home.php"><span style="color:green; font-size:120%;">Online Examination</span></a>
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
<div>
<h1 style="color:red;text-align:center;">Your Previous Results </h1>

<!-- <div style="color:white;background-color:teal;magrin-left:350px;"> -->
<table class="table table-striped">
    <thead>
      <tr>
        <th>your email</th>
        <th>category</th>
        <th>Set</th>
        <th>your marks</th>
		<th>total marks</th>
		<th>date</th>
      </tr>
    </thead>
    <tbody>

<?php 
 mysql_connect("localhost","root","");
 mysql_select_db("oes");
 
   $email3=$_SESSION['email'];
  $query="select * from result where user_email='$email3' ";
  $run=mysql_query($query);
  while($rows=mysql_fetch_array($run)){
	 
	 
	 
	 

	 
	 $user_email=$rows[1];       
	 

	 $cat=$rows[2];
	 $marks=$rows[3];
   $total_marks=$rows[4];
	 $date=$rows[5];
	 $q_set=$rows[6];
	  
?>

      <tr>
        <td><?php echo $user_email;?></td>
         <td><?php echo $cat;?></td>
         <td><?php echo $q_set;?></td>
         <td><?php echo $marks;?></td>
		  <td><?php echo $total_marks;?></td>
		   <td><?php echo $date;?></td>
      </tr>
      
	  <?php	
  }
  ?>
    </tbody>
  </table>


  
  
  </div>
  
  </body>
  
  </html>