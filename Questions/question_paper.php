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
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
   <h2 style="text-align:center"> welcome </h2>
   <div class="container" style="magin:100">
   
<form action="question_paper.php" method="post"> 
	 <?php 
	      $conn=mysql_connect("localhost","root","");
		  mysql_select_db("oes");
		  $i=1;
		// $cat_id=$_GET['cat'];
		  $query="select * from question2 where cat_id='dsa'";
		  $run=mysql_query($query);
		  while($row=mysql_fetch_array($run)){
			  $ques=$row[1];
			  $ques_id=$row[0];
			  $opt1=$row[2];
			  $opt2=$row[3];
			  $opt3=$row[4];
			  $opt4=$row[5];
			  
			  
			  ?>
			
			  <h4><b><?php echo "<".$i.">"; ?><?php echo $ques;?></b></h4>
	  <h4><input type="radio" name="<?php echo $i; ?>" value="<?php echo 'A'; ?>"> <?php echo '<b>A. <b>'.$opt1; ?></br>
		  
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
   $query1="select  * from question2 where cat_id='dsa'";
		  $run1=mysql_query($query1);
		  $b=1;$marks=0;
		  while($row1=mysql_fetch_array($run1)){
			  $answer1=$row1['6'];
			  

          echo " <br><span style='color:red'>correct answer :".$b."->".$answer1."</span></br>";
	
		if(!empty($user_answer[$b])){
			if($user_answer[$b]==$answer1){$marks++ ;}
		}
	$b++;
	
		  }
		  $email2=$_SESSION['email'];
		   $total=$i-1;
		   $cat1='dsa';
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
	  
	  $check_result="select * from result where user_email='$email2' AND cat_id='dsa'";
	$run=mysql_query($check_result);
	if(mysql_num_rows($run)>0){
	$result_query="	UPDATE result  SET cat_id='dsa',correct_marks='$marks',total_marks='$total',date='$date' WHERE user_email='$email2'";
		$rub2=mysql_query($result_query);
		
	}
	 else{
	 $result_query="insert into result(user_email,cat_id,correct_marks,total_marks,date) values('$email2','$cat1','$marks','$total','$date')";
	mysql_query($result_query);
}
	echo "<br><a href='home.php'><button type='button' class='btn btn-success'>go to home page</button></a></div>";
	
	
	echo "<script>$(document).ready(function(){
   
   
        $('#p').hide();
    
   });
     </script>";
	
	
	
	
	
	}

	
mysql_close($conn);




?>

</body>
</html>