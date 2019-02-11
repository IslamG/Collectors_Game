<?php
include("dbconfig.php"); 
?>
   <?php
       
        //2- delete from database
        
        /*$result=mysqli_query($conn,$query);
        if($result){
          echo 'record id deleted';
        }
        else{
         die ("Error in query");
         
        }
        */
        try{
          $quary=" DELETE  FROM `user` WHERE `uid` = 2";
          $stmt= $conn->prepare($query);
          if($result){
               echo 'record id deleted';
             }
             else{
              die ("Error in query");
              
             }
      }
      catch (Exception $ex)
      {
          echo $ex->getMessage();
      }
        ?>

             <form action='' method='POST'>
        <ul>
        <?php
        // 3- write or display data
        
        while($row=  mysqli_fetch_assoc($result)){
           
  echo '<li>id:'. $row['uid'] .', username:' .$row['username'].', password:' .$row['password'] . 
     "<a href='deletescript.php? uid=' ".$row['uid']  ."'>Del</a></li>";
        }
        
        ?>
        </ul>
             </form>
        <?php
        // 4 clear
        mysqli_free_result($result);
        
        ?>
        
    </body>
</html>
<?php
//5 close connection
mysqli_close($connect);
?>