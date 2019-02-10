<?php
//Connect to Database
include "dbconfig.php";
//if not logged in show button
 session_start();

if ($_SESSION['loggedIn']=="no"){
        echo '<button id="logBtn" onclick="">Login</button> or <button id="regBtn" onclick="">Register</button>
                \nTo have a chance to add your time to our <u>Top 50</u> list.';
    }
else{
    echo 'Your time has been submitted for review';
    //use ID to compare new time with user's best time
    try{
        $sql="SELECT `topscore` FROM `userinfo` WHERE uid=".$_SESSION['userID'];
        $result=mysqli_query($conn,$sql);
        ///$result = $conn->query($sql);
        if (!$result) {
            echo "DB Error, could not query the database\n";
            echo 'MySQL Error: ' . mysql_error();
            exit;
        }

        while($row = mysqli_fetch_assoc($result)){
            $resultTime=$row['topscore'];
        }
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
            //$stmt->bind_param(':userId', "2");
            if ($stmt->execute())
            {
                return $resultTime;
                echo "\nsuccess";
                //echo $_COOKIE['time'];
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