<?php 
session_start();
if(!$_SESSION['email']){
	
	header("location:logout.php");
}
?>
<!doctype html>
<html>
<head>
<title>question paper</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href=".com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="js/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/jquery-latest.min.js"></script>
   <style>
body{
	background-image: url("java1.jpg");
	background-size: 1200px 750px;
		background-repeat: repeat-x;
		background-attachment: fixed;


}
</style>
</head>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../user_home.php"><span style="color:green; font-size:120%;">Online Examination</span></a>
    </div>
	<ul class="nav navbar-nav">
<!--	<li style="font-size:150%"><a href="#">Profile</a></li>-->
	<li style="font-size:150%"><a href="result.php">Result</a><li>
	<li style="font-size:150%"><a href="#">About-us</a><li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
	<li style="font-size:150%"><a href="#"><?php echo $_SESSION['email'] ?></a></li>
	<li style="font-size:150%"><a href="logout.php">Logout</a></li>
	</ul>
    
  </div>
</nav>
<body>
   <h2 style="text-align:center"> JAVA Set 1 </h2>
   <div class="container" style="margin:100">
   
<form action="java_set1.php" method="post"> 
	 <?php 
	      $conn=mysql_connect("localhost","root","");
		  mysql_select_db("oes");
		  $i=1;
		// $cat_id=$_GET['cat'];
		  $query="select * from java where q_set='set-1'";
		  $run=mysql_query($query);
		  while($row=mysql_fetch_array($run)){
			  $ques=$row[1];
			  //$ques_id=$row[0];
			  $opt1=$row[2];
			  $opt2=$row[3];
			  $opt3=$row[4];
			  $opt4=$row[5];

			  
			  
			  ?>
			
			  <h4><b><?php echo "<".$i.">"; ?><?php echo $ques;?></b></h4>
	  <h4><input type="radio" name="<?php echo $i; ?>" value="<?php echo 'A'; ?>"> <?php echo '<b>A. </b>'.$opt1; ?></br>
		  
		  <input type="radio" name="<?php echo $i ?>" value="<?php echo 'B'; ?>"> <?php echo '<b>B. </b>'.$opt2; ?></br>
		 	  
			  <input type="radio" name="<?php echo  $i; ?>" value="<?php echo 'C'; ?>"> <?php echo '<b>C. </b>'.$opt3; ?></br>
		 	 
			 <input type="radio" name="<?php echo  $i; ?>" value="<?php echo   'D'; ?>"> <?php echo '<b>D. </b>'.$opt4; ?></br>
            </h4>
		 <?php $i++;
		     };	 ?>
	<p id="p">
	<button type="submit" name="submit" id="btn"  class="btn btn-primary">submit </button>
	</p>
    </form>
	


	
<?php 
if(isset($_POST['submit'])){
		$d=1;
		for($d=1;$d<=$i;$d++){
	 if(!empty($_POST[$d])){
	 $user_answer[$d]=$_POST[$d];
	 echo "<br>you submitted ".$d."->".$user_answer[$d]."</br>";
	}
		
		}
 $conn=mysql_connect("localhost","root","");
 mysql_select_db("oes");
   $query1="select  * from java where q_set='set-1'";
		  $run1=mysql_query($query1);
		  $b=1;$marks=0;
		  if($run==false)
 			die(mysql_error());

		  while($row1=mysql_fetch_array($run1)){
			  $answer1=$row1[6];
			  

          echo " <br><span style='color:red'>correct answer :".$b."->".$answer1."</span></br>";
	
		if(!empty($user_answer[$b])){
			if($user_answer[$b]==$answer1){$marks++ ;}
		}
	$b++;
	
		  }
		  $email2=$_SESSION['email'];
		   $total=$i-1;
		   $cat1='java';
		  echo "<br>your got:->" .$marks."marks"."</br>";
		  echo "<br>total marks:->".$total."</br>";
		   echo "<br>percentage:->".$per=($marks/$total)*100;
		  /*echo '<div class="container">
  <h2>Progress Bar With Label</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $marks;?>" aria-valuemin="0" aria-valuemax="<?php echo $total;?>" style="width:$per%">
      
    </div>
  </div>
</div>';*/
      $date=date("y-m-d");
	  
	  $check_result="select * from result where user_email='$email2' AND cat_id='java' AND q_set='set-1'";
	$run=mysql_query($check_result);
	if(mysql_num_rows($run)>0){
	$result_query="	UPDATE result  SET correct_marks='$marks',total_marks='$total',date='$date' WHERE user_email='$email2' AND cat_id='java' AND q_set='set-1' ";
		$rub2=mysql_query($result_query);
		
	}
	 else{
	 $result_query="insert into result(user_email,cat_id,correct_marks,q_set,total_marks,date) values('$email2','java','$marks','set-1','$total','$date')";
	mysql_query($result_query);
}
	echo "<br><a href='../user_home.php'><button type='button' class='btn btn-success'>go to home page</button></a></div>";
	
	
	echo "<script>$(document).ready(function(){
   
   
        $('#p').hide();
    
   });
     </script>";
	
	
	
	
	
	}

	
mysql_close($conn);




?>

</body>
</html>