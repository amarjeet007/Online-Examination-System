
<?php
session_start();
if(!$_SESSION['email']){
	
	header("location:logout.php");
}

?>

<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>


<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"><span style="color:green; font-size:120%;">online examination</span></a>
    </div>
	<ul class="nav navbar-nav">
	<li style="font-size:150%"><a href="profile.php">profile</a></li>
	
	<li style="font-size:150%"><a href="#">About-us</a><li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
	<li style="font-size:150%"><a href="#"><?php echo $_SESSION['email'] ?></a></li>
	<li style="font-size:150%"><a href="logout.php">Logout</a></li>
	</ul>
    
  </div>
</nav>
<!-- card for profile -->
<div class="panel panel-default" style="width:250px;height:250px;float:right;">
    
    <div class="panel-heading">
	
	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">change profile pic</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">change your profile pic</h4>
        </div>
        <div class="modal-body">
          <form action="profile.php" method="post" enctype="multipart/form-data">
		  <input type="file" name="image">
		  <input type="submit" name="upload" value="upload now">
		  </form>
		  <?php
		  
		  if(isset($_POST['upload'])){
			 
			 $image_name= $_FILES['image']['name'] ;
			 $image_type= $_FILES['image']['type'] ;
			 $image_size= $_FILES['image']['size'] ;
			 $image_tmp_name= $_FILES['image']['tmp_name'] ;
			
			 if($image_name==''){
				 
				 echo "<script>alert('please select an image')</script>";
				 exit();
			 }
			 else {
				  move_uploaded_file($image_tmp_name,"user_image/$image_name");
				 /*echo "<script>
				  document.getElementById('dp').src = 'user_image/$image_name';
				  
				  </script>";*/
			 }
		  }
		  
		 ?>
		  

		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
	
	
  </div>
</div>

    <div class="panel-body"><img id="dp" src="user_image/$image_name.jpg" width="200px" height="160px"></div>
	<div class="panel-heading" style="text-align:center;"><?php echo $_SESSION['email'] ?></div>







</div>
</body>
</html>
