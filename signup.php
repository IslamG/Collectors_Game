<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style/signupStyle.css">
</head>
<body>
  <div class="header">
  <h1>Sign Up</h1>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="container">
   
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="uname"><b>Choose a user name</b></label>
    <input type="text" placeholder="Enter user name" name="uname"  value="<?php echo $username; ?>"required>

    <label for="email"><b>Your email address</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" required>

    <label for="psw"><b>Choose a Password</b></label>
    <input type="password" placeholder="Enter Password"  name="password_1" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password"  name="password_2" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    
    <div class="clearfix">
      <p>if you already have an account log in now :
			<a href="login.php">Sign in</a>
			</p>
      
      <button type="submit" class="signupbtn" name="reg_user">Sign Up</button>
    </div>
  </div>
  
  </form>
</body>
</html>