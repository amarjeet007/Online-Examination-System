<?php 
session_start();
if(!$_SESSION['email']){
	header('location:../index.php');

}
?>

<!doctype html>
<html>
<head>

   
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
  <title>Question Papers</title>
  
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <script type="text/javascript" src="js/respond.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-latest.min.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>

<style>
	p{
		font-weight: bold;
		
	}
	body{
		background-image: url("cppimage.jpg");
		background-repeat: repeat-x;
		background-attachment: fixed;

	}
</style>
 </head>
<body>
<div class="container">
 
<h1 style="font-weight: bold; font-family: Comic"> C++ Questions</h1>
</div>
 <div class="container">
 	<div class="row">
 		<div class="col-xs-12 col-sm-12 col-md-12">
 			
				<form action="cpp.php" method="POST">
				 <p>1. Which classes allow primitive types to be accessed as objects? </p>
				 	<input type="radio" name="1" value="1_1" > Storage<br>
				  	<input type="radio" name="1" value="1_2" > Virtual<br>
				  	<input type="radio" name="1" value="1_3" > Friend <br>
				  	<input type="radio" name="1" value="1_4" > Wrapper <br>
				<br>
				<p>2. Inline functions are invoked at the time of? </p>
				 	<input type="radio" name="2" value="2_1" > Run Time<br>
				  	<input type="radio" name="2" value="2_2" > Compile Time<br>
				  	<input type="radio" name="2" value="2_3" > Depends on how it is invoked<br>
				  	<input type="radio" name="2" value="2_4" > Both 2 & 3 <br>
				
				<br>
				<p>3. Which type of class has only one unique value for all the objects of that same class? </p>
				 	<input type="radio" name="3" value="3_1" > this<br>
				  	<input type="radio" name="3" value="3_2" > friend<br>
				  	<input type="radio" name="3" value="3_3" > static<br>
				  	<input type="radio" name="3" value="3_4" > both a & b <br>
				<br>
				<p>4. What defines a general set of operations that will be applied to various types of data? </p>
				 	<input type="radio" name="4" value="4_1" >Template class<br>
				  	<input type="radio" name="4" value="4_2" > Function template<br>
				  	<input type="radio" name="4" value="4_3" > Class Template <br>
				  	<input type="radio" name="4" value="4_4" > Both a & c above <br>
				<br>
				<p>5.For which type of class private and protected members of the class can be accessed from outside the same class in which they are declared? 
				</p>
				 	<input type="radio" name="5" value="5_1" > No such class exist<br>
				  	<input type="radio" name="5" value="5_2" > Friend<br>
				  	<input type="radio" name="5" value="5_3" > Static<br>
				  	<input type="radio" name="5" value="5_4" > Virtual <br>															
				<br>
				<p>6. Which of the following is a valid destructor of the class name "Country"? </p>
				 	<input type="radio" name="6" value="6_1" > int ~Country()<br>
				  	<input type="radio" name="6" value="6_2" > void Country()<br>
				  	<input type="radio" name="6" value="6_3" > int ~Country(Country obj)<br>
				  	<input type="radio" name="6" value="6_4" > ~Country() <br>
				<br>
				<p>7. Which of the following is not a valid conditional inclusions in preprocessor directives? </p>
				 	<input type="radio" name="7" value="7_1" > #ifdef<br>
				  	<input type="radio" name="7" value="7_2" > #ifundef<br>
				  	<input type="radio" name="7" value="7_3" > #endif <br>
				  	<input type="radio" name="7" value="7_4" > #elif <br>
				<br>
				<p>8.  int a = 10;<br>
					   void main()<br>
					   {<br>
						  int a = 20;<br>
						  cout << a << ::a;<br>
					   }<br>
					   Output?<br>	
				</p>	
				 	<input type="radio" name="8" value="8_1" > Syntax Error<br>
				  	<input type="radio" name="8" value="8_2" > 10 20<br>
				  	<input type="radio" name="8" value="8_3" > 20 10<br>
				  	<input type="radio" name="8" value="8_4" > 20 20 <br>
				<br>
				<p>9. A struct is the same as a class except that _________________________.</p>
				 	<input type="radio" name="9" value="9_1" > there are no member functions.<br>
				  	<input type="radio" name="9" value="9-2"> all members are public.<br>
				  	<input type="radio" name="9" value="9_3 > cannot be used in inheritance hierarchy <br>
				  	<input type="radio" name="9" value="9_4" > it does have a this pointer. <br>
				  	
				<br>
				<p>10. Which statement gets affected when i++ is changed to ++i?</p>
				 	<input type="radio" name="10" value="10_1" > i = 20; i++;<br>
				  	<input type="radio" name="10" value="10_2" > for (i = 0; i<20; i++) <br>	
				  	<input type="radio" name="10" value="10_3" > while (i++ = 20) cout << i;  <br>
				  	<input type="radio" name="10" value="10_4" > a = i++;  <br>
				<br>
				  <input type="Submit" name= "Submit" value="Submit">		
				</form>
		</div>
	</div>
	<br>
	<p style="color:black;"> Submit answers to see the Result </p>
</div>
	
</body>
</html>



<?php
if(isset($_POST['Submit'])){
	
	
	if(!empty($_POST['1']))
		$user_answer[0] = $_POST['1'];
	if(!empty($_POST['2']))
		$user_answer[1] = $_POST['2'];
	if(!empty($_POST['3']))
		$user_answer[2] = $_POST['3'];
	if(!empty($_POST['4']))
		$user_answer[3] = $_POST['4'];
	if(!empty($_POST['5']))
		$user_answer[4] = $_POST['5'];
	if(!empty($_POST['6']))
		$user_answer[5] = $_POST['6'];
	if(!empty($_POST['7']))
		$user_answer[6] = $_POST['7'];
	if(!empty($_POST['8']))
		$user_answer[7] = $_POST['8'];
	if(!empty($_POST['9']))
		$user_answer[8] = $_POST['9'];
	if(!empty($_POST['10']))
		$user_answer[9] = $_POST['10'];

	$correct_answer[0]="1_2";	
	$correct_answer[1]="2_2";
	$correct_answer[2]="3_2";
	$correct_answer[3]="4_2";
	$correct_answer[4]="5_2";
	$correct_answer[5]="6_2";
	$correct_answer[6]="7_2";
	$correct_answer[7]="8_2";
	$correct_answer[8]="9_2";
	$correct_answer[9]="10_2";
	$marks=0;
	$i=0;
	for($i=0;$i<10;$i++)
	{
		if(!empty($user_answer[$i]))
		if($user_answer[$i]==$correct_answer[$i])
		{
			$marks++;
		}
	}
	$email3=$_POST['email'];


	$query="insert into DATA(total_marks) values('$marks') where DATA.email_id='$email3'";


}

?>