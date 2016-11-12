<?php
  session_start();
  include('includes/connection.php');
  if(isset($_POST['submit'])){
  $email2=$_POST['lg_email'];
  $pwd2=$_POST['lg_pwd'];
  
  $check="select * from USERS where email_id='$email2' AND Password='$pwd2'";
  $run=mysql_query($check);
  
  if(mysql_num_rows($run)>0){
    $_SESSION['email']=$email2;
    
    echo "<script>alert('Welcome!')</script>";
     echo "<script>window.open('user_home.php','_self')</script>";

  }
  else
  {
    echo "<script>alert('email or password is incorrect')</script>";
    echo"<script>window.open('index.php','_self')</script>";
  }
}

?>
