<?php 
session_start();
if(!$_SESSION['name1']){
	header("location:admin_login.php");
}
?>



<html>

<head>
<?php include('../includes/connection.php'); ?>
<title> welcome admin</title>
</head>
<body>

<h1 style="text-align:center">Welcome <?php echo $_SESSION['name1']; ?> </h1>
 
 <table align="center" border="2" width="800px">
<tr bgcolor="yellow">
<th>last_name</th>
<th>first_name</th>
<th>user_email</th>
<th>user_pass</th>
<th></th>

</tr>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("oes");
 $query="select * from users";
 $admin=$_SESSION['name1'];
 $run= mysql_query($query);
 if($run==false)
 	die(mysql_error());

 while($row= mysql_fetch_array($run)){
	 
	 $user_id=$row[2];
	 $user_name=$row[1];
	 $user_email=$row[0];
	 $user_pass=$row[3];


?>
<tr>
<td><?php echo $user_id ?></td>
<td><?php echo $user_name ?></td>
<td><?php echo $user_email ?></td>
<td><?php echo $user_pass ?></td>
<td><a href="delete.php?del=<?php echo $user_email; ?>" >delete </td>
<!--<td><button type="submit" value=<?php '$user_email'?> name="delete" >delete </button></td>-->
</tr>

 <?php } ?>




</table>
 
 <center><h1 style="text-align:center;"> <a href="add_question.php"><button>Add Question </button></a></h1></center>
 <center><h1 style="text-align:center;"> <a href="logout.php"><button>Logout </button></a></h1></center>
</body>
</html>






