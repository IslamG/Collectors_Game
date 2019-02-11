<?php
// 1- connect to db
$host="127.0.0.1";
$user="root";
$password="";
$database="collectors_db";
$connect=  mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_errno()){
    die("cannot connect to database field:". mysqli_connect_error());
    
}
 else {
    echo 'Database is connected';  
}
?>   
   <?php
       
        //2- delete from database
        $quary=" DELETE  FROM `user` WHERE `uid` = " .$_GET['uid'];
        $result=mysqli_query($conn,$query);
        if($result){
          echo 'record id deleted';
        }
        else{
         die ("Error in query");
         
        }
        
          
        ?>
<?php
//5 close connection
mysqli_close($connect);
?>
