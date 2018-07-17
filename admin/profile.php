<?php 
  session_start();
  ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin RTO</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/stylee.css">
</head>

<body>
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
              <a href="profile.php" class="navbar-brand">Welcome Admin</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#header">Home</a></li>
                
               
                <li><a href="#">Signed in as <?php echo $_SESSION['userr']; ?></a></li>
                <li><a href="logout.php">Log Out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!--/ nav-->
      <div class="container text-center">
        <div class="wrapper wow fadeInUp delay-05s">
          <h2 class="top-title">Issue</h2>
          <h3 class="title">License</h3>
          <h4 class="sub-title"> & other</h4>
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
            <a href="#feature"><h2 class="head-title">Features</h2></a>
            <hr class="botm-line">
            <p class="sec-para">Explore what this site has to offer</p>
          </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <!--<i class="fa fa-paint-brush"></i>--><i class="fa fa-desktop"></i>
            </div>
            <div class="icon-text">
             <h3 class="txt-tl">Approve license</h3>
              <p class="txt-para"><a href="llicense.php">Learner's License</a>   <a href="dlicense.php">  Driving License</a></p>
            </div>
          </div>
          
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
             <i class="fa fa-mobile"></i>
            </div>
            <div class="icon-text">
              <a style="color:black"><h3 class="txt-tl">Approve Vehicle Registration</h3></a>
              
              <p class="txt-para"><a href="vehicleauth.php">Registration</a> </p>

            
            </div>
          </div>
          <div class="col-md-9">
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <!--<i class="fa fa-paint-brush"></i>--><i class="fa fa-desktop"></i>
            </div>
            <div class="icon-text">
             <h3 class="txt-tl">Approve Fancy Number</h3>
               <p class="txt-para"><a href="fancy.php">Approve a custom fancy Number</a> </p>
            </div>
          </div>
          

          <!--<div class="col-md-6 wow fadeInRight delay-04s">
            <div class="icon">
              <i class="fa fa-mobile"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">hmmm</h3>
              <p class="txt-para">holding </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-04s">
            <div class="icon">
              <i class="fa fa-desktop"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">hi!</h3>
              <p class="txt-para">! </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-06s">
            <div class="icon">
              <i class="fa fa-lightbulb-o"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">hi</h3>
              <p class="txt-para">hi</p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-06s">
            <div class="icon">
              <i class="fa fa-clock-o"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">hi</h3>
              <p class="txt-para">hi </p>
            </div>
          </div>
        </div>
      </div>
    </div>-->
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
