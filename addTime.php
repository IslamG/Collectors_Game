<?php
//Connect to Database
include "dbconfig.php";
//if not logged in show button
 session_start();
    $_SESSION['loggedIn']="yes"; //initiate with values
    $_SESSION['userID']="1"; //unti login page is complete

if ($_SESSION['loggedIn']!="yes"){
        echo '<button id="logBtn" onClick="login.php">Login</button> or <button id="regBtn" onClick="signup.php">Register</button>
                <br/>To have a chance to add your time to our <u>Top 50</u> list.';
    }
else{
    echo 'Your time has been submitted for review';
    //use ID to compare new time with user's best time
    try{
        $sql="SELECT `topscore` FROM `userinfo` WHERE uid=".$_SESSION['userID'];
        $result=mysqli_query($conn,$sql);

        if (!$result) {
            echo "DB Error, could not query the database\n
                 'MySQL Error: '" . mysql_error();
            exit;
        }

        while($row = mysqli_fetch_assoc($result)){
            $resultTime=$row['topscore'];
        }
        //change type to formatted date
        $d1=date('s:i:h', strtotime($resultTime));
        $d2= date('s:i',strtotime($_COOKIE['time']));
        
        

    }
    catch( Exception $ex){
        echo $ex->getMessage();
    }
    //if new time is better, update user's best time

    if ($d1>$d2){
        try{
            $query="UPDATE `collectors_db`.`userinfo` SET `topscore` = '".$d2."' 
                            WHERE `userinfo`.`uid`='".$_SESSION['userID']."'";
            $stmt= $conn->prepare($query);
            if ($stmt->execute())
            {
                //return $resultTime;
                echo "\nsuccess";
            }
        }
        catch (Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
}
mysqli_close($conn);
?>