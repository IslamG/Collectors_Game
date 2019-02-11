<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style/loginStyle.css">
	<script src="js/jquery-3.3.1.js" type="text/javascript" ></script>
</head>
<body>
  <div class="header">
	<h2>Login Form</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
		<div class="imgcontainer">
    <img src="images/login.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button class="showP">show password</button>
        
    <button type="submit" name="login_user" class="btn" >Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
	<p>
  		Not yet a member? <a href="signup.php">Sign up</a>
  	</p>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  	
	</form>
	<script src="script/loginScript.js" type="text/javascript" ></script>
</body>
</html>