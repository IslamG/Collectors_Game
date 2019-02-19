<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1">
<title> Home </title>
<!-- Javascripts --> 
<script src="script/jquery-3.3.1.js" type="text/javascript" ></script>
 <script src="script/jquery-3.3.1.min.js" type="text/javascript" ></script>
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="style/bootstrap.css">
<!-- Stylesheet -->
<link rel="stylesheet" type="text/css"  href="style/homeStyle.css">
</head>
<body>
<!-- Navigation-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="home.php " class="page-scroll">Home</a></li>
    <?php
      if(isset($_SESSION['userId']) && $_SESSION['userId'] > 0) {
          echo '<li><a href="logout.php" class="page-scroll">logout</a></li>' ;
            } else {
          echo '<li><a href="login.php" class="page-scroll">login</a></li>' ;
          echo '<li><a href="signup.php" class="page-scroll">signup</a></li>' ;
        }
      ?>
        <li><a href="#game-section" class="page-scroll">about the game</a></li>
        <li><a href="#team-section" class="page-scroll">Team</a></li>
        <li><a href="#contact-section" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- Header -->
<header class="text-center" name="home">
  <div class="intro-text">
    <h1>Welcome to collectors game</h1>
    <p> hope you enjoy it </p>
    <div class="clearfix"></div>
    <?php
      if(isset($_SESSION['userId']) && $_SESSION['userId'] > 0) {
          echo '<a href="gameIndex.php" class="btn btn-default btn-lg page-scroll">play now</a>' ;
          echo '<a href="game2Index.html" class="btn btn-default btn-lg page-scroll">more games like this </a>' ;
            } else {
          echo '<a href="signup.php" class="btn btn-default btn-lg page-scroll"> sign up to try our game </a>' ;
            }
          ?>
  </div>
</header>

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
        <div class="thumbnail"> <img src="img/teamAvatar.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>heba elosta</h3>
            <p>student 215180265</p>
            <p>software engineering</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/teamAvatar.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3> islam </h3>
            <p>student</p>
            <p>software engineering</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/teamAvatar.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>hajer</h3>
           <p>student</p>
            <p>software engineering</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/teamAvatar.jpg" alt="..." class="img-circle team-img">
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
              <input type="text" id="name" class="form-control"
                     placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control"
                     placeholder="Email" required="required">
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
        <button type="submit" class="btn btn-default">Send Message</button>
      </form>
    </div>
  </div>
</div>

<!-- scroll to top -->
<div id="scroll-up">
  <img id="sc" src="img/scrollup.png" alt="scroll up">
</div>

<!-- footer -->
<div id="footer">
  <div class="container">
    <center><p>Copyright &copy; 2019 collectors game . designed by : SH3I </p></center>
  </div>
</div>
<!-- Javascripts --> 
<script src="script/jquery-3.3.1.min.js"></script>
<script src="script/homeScript.js" type="text/javascript" ></script>
</body>
</html>

