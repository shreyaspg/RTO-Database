<?php 
  session_start();

  $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname ='cred';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            $sql = "SELECT * FROM `fancy` WHERE `status` = 'not issued' ";
      $result = mysqli_query($conn, $sql);

     
            if (mysqli_num_rows($result)==0) {

              Print '<script>alert("No requests!");</script>'; 
              Print  '<script>window.location.assign("profile.php")</script>';
            }

            mysqli_close($conn);
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript">
$(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('.data-table').offset().top
    }, 'slow');
});</script>


  <style type="text/css">
    body {
      font-size: 15px;
      color: #343d44;
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      padding: 0;
      margin: 0;
    }
    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 30px;
    }

    h1 {
      margin: 25px auto 0;
      text-align: center;
      text-transform: uppercase;
      font-size: 17px;
    }

    table td {
      transition: all .5s;
    }
    
    .my {
      color: black;
    }
    /* Table */
    .data-table {
      border-collapse: collapse;
      font-size: 14px;
      min-width: 537px;
    }

    .data-table th, 
    .data-table td {
      border: 1px solid #e1edff;
      padding: 7px 17px;
    }
    .data-table caption {
      margin: 7px;
    }

    /* Table Header */
    .data-table thead th {
      background-color: #e0be14;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }

    /* Table Body */
    .data-table tbody td {
      color: black;
    }
    .data-table tbody td:first-child,
    .data-table tbody td:nth-child(4),
    .data-table tbody td:last-child {
      text-align: right;
    }

    .data-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }
    .data-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
    }

    /* Table Footer */
    .data-table tfoot th {
      background-color: #e5f5ff;
      text-align: right;
    }
    .data-table tfoot th:first-child {
      text-align: left;
    }
    .data-table tbody td:empty
    {
      background-color: #ffcccc;
    }
  </style>
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
              <a href="index.html" class="navbar-brand">Welcome</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="profile.php">Home</a></li>
                
                <li><a href="#contact">Contact</a></li>
                <li><a href="profile.php">Signed in as <?php echo $_SESSION['userr']; ?></a></li>
                <li><a href="logout.php">Log Out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!--/ nav-->
      <div class="container text-center">
        <div class="wrapper wow fadeInUp delay-05s">
          <h2 class="top-title">Learner's License</h2>
          <h3 class="title">Apply here..</h3>
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
  </br></br></br>
  <h1>Fancy Number Requests</h1>
  </br>
  <table class="data-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>DL NO</th>
        <th>REG NO</th>
        <th>STATUS</th>
  
      </tr>
    </thead>
    <tbody>
    <?php
    $no   = 1;
    $total  = 0;
    while ($row = mysqli_fetch_array($result))
    {
      $email=$row['email'];
      $con2 = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
      $sql2="SELECT * FROM uplo WHERE `email`='$email'";
    $result_set=mysqli_query($con2,$sql2);
    while ($row2 = mysqli_fetch_array($result_set))
    {
        $_SESSION['final']=$row['dl'];
    
      echo '<tr>
          <td>'.$row['fid'].'</td>
          <td>'.$row['dl'].'</td>
          <td>'.$row['reg'].'</td>
          <td>'.$row['status'].'</td>

          </tr>';
          ?>
          <div class='my'>
         <td> <a href="../user/uploads/<?php echo $row2['file'] ?>" target="_blank">view document</a></td>
         </div>
          <?php
        }
    }?>
    </tbody>
  </table>
  </br></br>
  <div class="container">
  <div class="row">
    <div class="col-md-8">
      <section>      
        <!--<h1 class="entry-title"><span>Enter details here</span> </h1>-->
        <hr>
            <form class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" action="fancyr.php" >        
        <div class="form-group">
          <label class="control-label col-sm-3">Enter ID  <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="text" class="form-control" name="emailid" id="emailid" placeholder="Enter License Id" value="" required="required">
            </div>
            <small>  </small> </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-3">Comment<span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="text" class="form-control" name="comment" id="emailid" placeholder="Enter reason if an" value="" required="required">
            </div>
            <small>  </small> </div>
        </div>
         <div class="col-xs-offset-3 col-xs-10">
            <input name="Submit" type="submit" value="Authorize Learner's License" class="btn btn-primary">
          </div>
          </br>
          </br>
          </br>
          <div class="col-xs-offset-3 col-xs-10">
            <input name="SSubmit" type="submit" value="Reject Learner's License" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
</div>
</div>
  <section id="cta-1">
    <div class="container">
      <div class="row">
        <div class="cta-info text-center">
          <h3><span class="dec-tec">“</span>Over Speeding Kills<span class="dec-tec">”</span></h3>
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
             <h3 class="txt-tl">Apply for license</h3>
              <p class="txt-para"><a href="llicense.html">Learner's License</a>   <a>    Driving License</a></p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
             <i class="fa fa-mobile"></i>
            </div>
            <div class="icon-text">
              <a href="license.html" style="color:black"><h3 class="txt-tl">Vehicle Registration</h3></a>
              
              <p class="txt-para">Registration And Renewal </p>
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
  
  <section class="section-padding wow fadeInUp delay-05s" id="contact">
    <div class="container">
      <div class="row white">
        <div class="col-md-8 col-sm-12">
          <div class="section-title">
            <h2 class="head-title black">Contact Us</h2>
            <hr class="botm-line">
            <p class="sec-para black">We'd love to know what you think</p>
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="col-md-4 col-sm-6" style="padding-left:0px;">
            <h3 class="cont-title">Email Us</h3>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="contact-info">
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <button type="submit" class="btn btn-send">Send</button>
              </form>
            </div>

          </div>
          <div class="col-md-4 col-sm-6">
            <h3 class="cont-title">Visit Us</h3>
            <div class="location-info">
              <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Via RVCE</p>
              <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Phone: 958784851551</p>
              <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="" class="link-dec">hi@yourdomain.com</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
              <span aria-hidden="true" class="fa fa-envelope-o"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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