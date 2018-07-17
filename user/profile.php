<?php 
  session_start();
  ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to RTO</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/stylee.css">
</head>

<body onload="func()">
  <!--header-->
  <header class="main-header" id="header">
    <div class="bg-color">
      <!--nav-->
      <nav class="nav navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
              <a href="index.html" class="navbar-brand">Welcome</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#header">Home</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="myinfo.php">Signed in as <?php echo $_SESSION['userr']; ?></a></li>
                <li><a href="logout.php">Log Out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!--/ nav-->
      <div class="container text-center">
        <div class="wrapper wow fadeInUp delay-05s">
          <h2 class="top-title">Apply for License</h2>
          <h3 class="title">Vehicle Registration</h3>
          <h4 class="sub-title">We make it easy</h4>
          <!--<form method="get" action="signup.php">
          <button type="submit" class="btn btn-submit">Sign Up</button>
          </form>
          -->
        </div>
      </div>
    </div>
  </header>
  <!--/ header-->
  <!---->
  
  <section id="cta-1">
    <div class="container">
      <div class="row">
        <div class="cta-info text-center">
          <h3><span class="dec-tec">“</span>Don't drink and drive<span class="dec-tec">”</span></h3>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <!---->
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 wow fadeInLeft delay-05s">
          <div class="section-title">
            <h2 class="head-title">Features</h2>
            <hr class="botm-line">
            <p class="sec-para"></p>
          </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-paint-brush"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Apply for License</h3>
              <a style="color:maroon" href="llicense.php" class="txt-para">Learners License </a><br>
              <a style="color:maroon" href="dlic.php" class="txt-para">Drivers License </a><br>
              <a style="color:maroon" href="../report/rec.php" class="txt-para">Print License </a>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Vehicle Registration</h3>
              <a style="color:maroon" href="vehicle.php" class="txt-para">Apply for Vehicle Registration </a><br>
              <a href="vehicle.php" class="txt-para"> </a><br>
              <a style="color:maroon" href="#" class="txt-para">.</a>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-04s">
            <div class="icon">
              <i class="fa fa-mobile"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Fancy Number</h3>
              <a href="fancy.php" style="color:maroon" style="color:maroon" class="txt-para">Request a custom fancy number </a>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-04s">
            <div class="icon">
              <i class="fa fa-desktop"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Download</h3>
              <a href="forms/learn.pdf" style="color:maroon" class="txt-para" download>Learners application form</a><br>
              <a href="forms/driv.pdf" style="color:maroon" class="txt-para" download>Drivers application form</a><br>
               <a href="forms/reg.pdf" style="color:maroon" class="txt-para" download>Vehicle Registration form</a>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>

  <!---->
  <!--<section class="section-padding parallax bg-image-2 section wow fadeIn delay-08s" id="cta-2">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="cta-txt">
            <h3>Subscribe For Updates</h3>
            <p>Join</p>
          </div>
        </div>
        <!--<div class="col-md-4 text-center">
          <a href="#" class="btn btn-submit">Subscribe Now</a>
        </div>-->
      <!--</div>
    </div>
  </section>-->
  <!---->
  <!---->
  
   <section class="section-padding wow fadeInUp delay-05s" id="contact">
    <div class="container">
      <div class="row white">
        <div class="col-md-8 col-sm-12">
          <div class="section-title">
            <h2 class="head-title black">Contact Us</h2>
            <hr class="botm-line">
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="col-md-4 col-sm-6" style="padding-left:0px;">
            

          </div>
          
            <h3 class="cont-title">Visit Us</h3>
            <div class="location-info">
              <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Via RV College,Bengaluru</p>
              <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Phone:080 12345678</p>
              <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="" class="link-dec">rto@yourdomain.com</a></p>
            </div><br><br>
          
          
        </div>
      </div>
    </div>
  <!---->
  <!---->
  <footer class="" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 footer-copyright">
          © Shreyas All rights reserved
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bethany
            -->
           
          </div>
        </div>
        <div class="col-sm-5 footer-social">
          <div class="pull-right hidden-xs hidden-sm">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!---->
  <!--contact ends-->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>
