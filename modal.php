<head>
  <style>
    form{
      background-color:seashell;
      }
    </style>
  </head>

<div class="row">
  <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#loginModal1"><span class="glyphicon glyphicon-log-in"></span>   Login</button>
  </div>
</div>
<br>
<div class="row"> 
  <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
    <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#registerModal1"><span class="glyphicon glyphicon-user"></span>   Register</button>
  </div>
</div>
<!-- Modal -->
<div id="loginModal1" class="modal fade" role="dialog"  >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Please Enter Credentials</h4>
      </div>
      <div class="modal-body" >
        
        <form method="POST" action="login.php">
          <div class="form-group">
            <label for="email">Email address: </label>
            <input type="email" class="form-control" name="lg_email">
          </div>
          
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="lg_pwd">
          </div>
            
         
          <button type="submit" name="submit" class="btn btn-block btn-danger">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div id="registerModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enter Your Details</h4>
      </div>
      <div class="modal-body">
        
        <form  method="POST" action="register.php">
          <div class="form-group" >
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          
          <div class="form-group">
            <label for="fname">First Name: </label>
            <input type="fname" class="form-control" name="fname" required>
          </div>

          <div class="form-group">
            <label for="lname">Last Name: </label>
            <input type="lname" class="form-control" name="lname" required>
          </div>


          <div class="form-group">
            <label for="pwd">Create Password:</label>
            <input type="password" class="form-control" name="pwd" required>

            <label for="pwd">Re-enter Password:</label>
            <input type="password" class="form-control" name="pwd1">
          </div>
            
          <button type="submit" value="submit" name="submit" class="btn btn-block btn-danger">Register</button>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</html>


