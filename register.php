<?php


include ('includes/Connection.php');


if(isset($_POST['submit'])) {
  
  $email = $_POST['email'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $pwd = $_POST['pwd'];
  $pwdd=$_POST['pwd1'];
  if($email=='' OR $pwd=='' OR $fname=='' OR $lname=='' OR $pwdd==''){
    echo "<script>alert('fill in the all field')</script>";
   //echo "<script>window.open('index.php','_self')</script>";
  }


  $check_email="select * from USERS where email_id='$email'";
  $run=mysql_query($check_email);
  if(mysql_num_rows($run)>0){
    
    echo "<script>alert('This email already exist! Please enter another email')</script>";
    //echo "<script>window.open('Home.php','_self')</script>";
  }
  else {
    if($pwd==$pwdd){


    $pwd1=md5($pwd);
    $insert_users="insert into USERS(email_id,First_Name,Last_Name,Password)values('$email','$fname','$lname','$pwd')";
    $insert_data="insert into USERS(email_id)values('$email')";
    $run_post=mysql_query($insert_users);
  echo "<script>alert('Registration Successful!')</script>";
     echo "<script>window.open('index.php','_self')</script>";
  }
  else{
    echo "<script>alert('Passwords do not match, Please re-enter')</script>";
   echo "<script>window.open('index.php','_self')</script>"; 
  }
  }
}






?>