


<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php
include("dbconfig.php");
    
    
    if(isset($_POST['submit'])){
      $username=$_POST['username'];
    $password=$_POST['password'];
    $query="INSERT INTO `user`( `username`, `password`) VALUES ('". $username."', '". $password ."' )";
      $result=mysqli_query($conn,$query);
  if(mysqli_query($conn,$query)){
      if($result){
        echo"inserted";
    }
    else{
       die("database query error." .mysqli_error($conn));
    }
    
    
  }}
  
    

  
  
?>
    <form action='form.php'  method='POST'>
        USER name:<input type='text' name='username'>
    </br>
    USER password:<input type='text' name='password'>
    </br>
    <input type='submit' name='submit' value='send info'>
    
    </form>
    </body>
</html>
