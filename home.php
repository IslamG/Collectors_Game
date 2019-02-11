<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1">
<title> Home</title>
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="style/bootstrap.css">
<!-- Stylesheet -->
<link rel="stylesheet" type="text/css"  href="style/homeStyle.css">
<link rel="stylesheet" type="text/css"  href="style/templateStyle.css">
</head>
<body>
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
          <div class="error success" >
            <h3>
              <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
              ?>
            </h3>
          </div>
        <?php endif ?>
    
<!-- Navigation-->
<!-- Header -->
<div id="headpos">
<header class="text-center" name="home">
  <div class="intro-text">
    <h1>Welcome to collectors game</h1>
    <p id="headerpar"> hope you enjoy our game </p>
    <div class="clearfix"></div>
    <a href="gameIndex.html" class="btn btn-default btn-lg page-scroll">play now </a> 
    <a href="game2Index.html" class="btn btn-default btn-lg page-scroll">more games like this </a>
  </div>
</header>
</div>

<!-- about the game Section -->
<div id="game-section">
  <div class="container"> <!-- Container -->
    <div class="section-title">
      <h2> about the <strong> game </strong></h2>
	  <hr>
    <div id="gameDesc">
	    
    </div>
    </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team-section">
  <div class="container">
    <div class="section-title">
      <h2>Meet the <strong>Team</strong></h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div id="row">
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="images/teamAvatar.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>heba elosta</h3>
            <p>student 215180265</p>
            <p>software engineering</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="images/teamAvatar.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3> islam </h3>
            <p>student</p>
            <p>software engineering</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="images/teamAvatar.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>hajer</h3>
           <p>student</p>
            <p>software engineering</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="images/teamAvatar.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3> heba </h3>
            <p>student </p>
            <p>software engineering</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div id="contact-section">
  <div class="container">
    <div class="section-title center">
      <h2><strong>Contact</strong> us</h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-4"> </div>

    <div class="col-md-8">
      <h3>Leave us a message</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
            <!-- calculate text area -->
            <textarea name="message" id="message"
            class="form-control" rows="4"
            placeholder="Message" maxlength="300"
            required></textarea>
          <div class="message"></div>
            <p class="help-block text-danger"></p>
          </div>
        <div id="success"></div>
        <button onClick="sayDone()" type="submit" class="btn btn-default">Send Message</button>
      </form>
    </div>
  </div>
</div>
<!-- scroll to top -->
<div id="scroll-up">
  <img src="images/scrollup.png" alt="scroll up">
</div>
<!-- footer -->
<div id="footer">
  <div class="container">
    <center><p>Copyright &copy; 2019 collectors game . designed by : SH3I </p></center>
  </div>
</div>

 <!-- logged in user information -->
 <?php  if (isset($_SESSION['username'])) : ?>
 <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
 <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
<?php endif ?>
</div>

<script src="script/jquery-3.3.1.min.js"></script>
<!-- Javascripts --> 
<script src="script/homeScript.js" type="text/javascript" ></script>
<script src="script/templateScript.js" type="text/javascript" ></script>
 </body>
</html>