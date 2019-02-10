<?php
    session_start();
    $_SESSION['loggedIn']="no";
    $_SESSION['userID']="2";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/gameStyle.css">
<link rel="stylesheet" type="text/css" href="style/popUpStyle.css">
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
<script src="script/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/templateStyle.css">
<script src="script/templateScript.js"></script>
</head>
<body onload="init();">
<!-- encases all of the game objects-->
<div id="content" >
<div id="loaderBg">
<div id="loader"></div>
<p>Loading...</p>
</div>
<div id="startScreen" class="start">
    <h2> How to play:</h2>
        You will find a hoard of items in this room and it's <i>your</i> job to sort them!<br/>
        Use your mouse to click on items displayed on the screen to select an item found.<br/>
        If your item is on the list you're one step closer to <span style="color:yellow;">victory</span>. 
        But be careful! You don't just click randomly.<br/><h4 style="text-align: center; color:pink" >Be warned!</h4>Don't catch any 
        Clicking 3 times on items not listed will earn you a <span style="color:red;">penalty</span> and will add <span
        style="color:pink; font-weight:bolder;">3 seconds</span>to your time.<br/>
        You may use the <span style="color:yellow;">hint</span> buttons to solve 1 item each.<br/><br/>
        <p style="text-align: center;">
        <button id="startButton" class="start" onclick="play()">START</button>
        <br/> <b><u>HAVE FUN</u></b>
        </p>
</div>
<span id="hintBox">
    <img src="images/hint.png" class="hint">
    <img src="images/hint.png" class="hint">
    <img src="images/hint.png" class="hint">
</span>
<div class="popup" id="winDialogue">
    <p>You Won!<br/>Your time is:<br/><span id="totTime"></span><br/>Thank you for playing!!</p>

   <span class="close">
    <i class="fa fa-close"></i>
  </span>
   
</div>
<img id="item_pane" class="gameControls" src="images/decoration/item_pane.png"/>
<img id="timer" class="gameControls" src="images/decoration/timer.png"/>
<img id="restartSign" src="images/decoration/reset.png"/>
<div id="timerDisplay" class="gameControls">00:00</div>
<button id="restartBtn" class="gameControls" onclick="restartButton();">&#8635;</button>
<button id="pauseBtn" class="gameControls" onClick="pause();">||</button>

<ul id="itemList">
</ul>

<div id="foreGround">
<div id="furniture">
<img src="" id="chan">
<img src="" id="addL">
<img src="" id="mid">
<img src="" id="addR">
</div>
<div id="stuff"></div>
</div>
</div>
<!--game logic must preceed game script-->
<script type="text/javascript" src="script/popUpScript.js"></script>
<script type="text/javascript" src="script/gameLogic.js"></script>
<script type="text/javascript" src="script/gameScript.js"></script>
</body>
</html>