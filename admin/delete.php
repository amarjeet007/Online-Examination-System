<?php
 mysql_connect("localhost","root","");
 mysql_select_db("oes");
  
  /*if(isset($_POST['delete'])){
    $deleted = $_POST['delete'];
    echo "<script>alert('$deleted')</script>";
    */
    $delete=$_GET['del'];
  $query=" delete from users where email_id='$delete'";
 if(mysql_query($query)){
  
  
  header("location:home_admin.php");
  
  }
  
  
  
  ?>