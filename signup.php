<?php include 'db_connection.php'; ?>

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: orangered ;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Float cancel and signup buttons and add an equal width */
 .signupbtn {
  float: left;
  width: 30%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $email=$_POST["email"];

             global $con;
             $query = $con->prepare("INSERT INTO user SET 
             username = ? ,
             email = ? ,
             password =? ;");

            $query->execute(
                array(
                    $username , $email , $password )); } 
        ?>
 <h1>Sign Up</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" style="border:1px solid #ccc" method="post">
  <div class="container">
   
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="username"><b>Choose a user name</b></label>
    <input type="text" placeholder="Enter user name" name="username" required>

    <label for="email"><b>Your email address</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Choose a Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password-repeat" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>