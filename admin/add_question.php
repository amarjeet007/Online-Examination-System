<?php 
session_start();
if(!$_SESSION['name1']){
  header("location:admin_login.php");
}
?>





<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

 
 <div style="margin-top:50px;margin-left:300px;margin-right:300px;margin-bottom:100px">
 <h1 style="color:red">write your question here </h1>
    <form action="add_question.php" method="post">
	<div class="form-group">
      <label for="name1">question</label>
      <input type="text" class="form-control" name="question" id="name1"placeholder="Enter question">
    </div>
	 <div class="form-group">
      <label for="name2">option1</label>
      <input type="text" class="form-control" name="option1" id="name2" placeholder="Enter option1">
    </div>
	<div class="form-group">
      <label for="name3">option2</label>
      <input type="text" class="form-control" name="option2" id="name3" placeholder="Enter option2">
    </div>
	<div class="form-group">
      <label for="name4">option3</label>
      <input type="text" class="form-control" name="option3" id="name4" placeholder="Enter option3">
    </div>
	<div class="form-group">
      <label for="name5">option4</label>
      <input type="text" class="form-control" name="option4" id="name5"  placeholder="Enter option4">
    </div>
	
	<div class="form-group">
      
  <label for="ans">correct answer:</label>
  <select class="form-control" name="cor_ans" id="ans">
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>D</option>
  </select>

    </div>
	<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-12">
  <div class="form-group">
      
  <label for="cat1">category</label>
  <select class="form-control" name="cat" id="cat1">
    <option>dsa</option>
    <option>os</option>
    <option>java</option>
    <option>cpp</option>
  </select>

    </div>
  </div>

  <div class="col-md-6 col-lg-6 col-sm-12">
  <div class="form-group">
      
  <label for="cat1">Question set</label>
  <select class="form-control" name="set" id="set1">
    <option>Set-1</option>
    <option>Set-2</option>
    <option>Set-3</option>
    <option>Set-4</option>
  </select>

    </div>
</div>
</div>
<center>  <input type="submit" name="submit" class="btn btn-primary btn-lg" value="submit">
</center>
  
  </form>
<center> <h1 style="text-align:center;"> <a href="home_admin.php"><button class="btn btn-success btn-lg">Done </button></a></h1></center>
  </div>
</body>

</html>

<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("oes");

if(isset($_POST['submit'])){
     $ques = $_POST['question'];
     $opt1 =$_POST['option1'];
     $opt2 =$_POST['option2'];
	 $opt3 =$_POST['option3'];
	 $opt4 =$_POST['option4'];
	 $cor_ans =$_POST['cor_ans'];
	 $cat =$_POST['cat'];
   $set=$_POST['set'];
 if($ques=='' OR $opt1=='' OR $opt2=='' OR $opt3=='' OR $opt4=='' OR $cor_ans=='' OR $cat=='' ){
	 echo "<script>alert('fill all query ')</script>";
 } else {
  
 $query= "insert into  $cat (Question,ans_1,ans_2,ans_3,ans_4,correct_ans,q_set)values('$ques','$opt1','$opt2','$opt3','$opt4','$cor_ans','$set')";
	$run = mysql_query($query);
	 }
   

}
?>