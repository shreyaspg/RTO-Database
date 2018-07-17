<?php 
  session_start();

  $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname ='cred';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
            $email= $_SESSION['userr'];
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            $sql = "SELECT * FROM `register` WHERE `email` = '$email' ";
            $sql2 =  "SELECT * FROM `license` WHERE `email` = '$email' ";
            $sql3 =  "SELECT * FROM `dlicense` WHERE `email` = '$email' ";
            $sql4 =  "SELECT * FROM `vehicle` WHERE `email` = '$email' ";
            $sql5 =  "SELECT * FROM `fancy` WHERE `email` = '$email' ";

            $result = mysqli_query($conn, $sql);
            $result2 = mysqli_query($conn, $sql2);
            $result3= mysqli_query($conn, $sql3);
            $result4= mysqli_query($conn, $sql4);
            $result5= mysqli_query($conn, $sql5);
            //mysqli_close($conn);
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
   <section id="cta-1">
    <div class="container">
      <div class="row">
        <div class="cta-info text-center">
          <h3><span class="dec-tec">“</span>If Your License Was Rejected Please Visit Your Nearest RTO Office<span class="dec-tec">”</span></h3>
        </div>
      </div>
    </div>
  </section>
  <!--/ header-->
  <!---->
  </br></br></br>
  </br>
  <table class="data-table">
    <thead>
      <tr>
        <th>NAME</th>
        <th>GENDER</th>
        <th>PHONE</th>
        <th>ALT PHONE</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while ($row = mysqli_fetch_array($result))
    {
      echo '<tr>
          <td>'.$row['name'].'</td>
          <td>'.$row['gender'].'</td>
          <td>'.$row['phone'].'</td>
          <td>'.$row['alt'].'</td>
         
        </tr>';
    }?>
    </tbody>
  </table>
  </br>
  
  <table class="data-table">
    <thead>
      <tr>
        <th>LL ID</th>
        <th>LL STATUS</th>
        <th>LC TYPE</th>
        <th>DL ID</th>
        <th>DL STATUS</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while ($row = mysqli_fetch_array($result2))
    { 
      $row2= mysqli_fetch_array($result3);
      echo '<tr>
          <td>'.$row['id'].'</td> 
          <td>'.$row['status'].'</td> 
          <td>'.$row['type'].'</td> 
          <td>'.$row2['did'].'</td> 
          <td>'.$row2['status'].'</td> 
        </tr>';
    }
    ?>

    </tbody>
  </table>
  </br></br>
  <table class="data-table">
    <thead>
      <tr>
        <th>Vehicle Reg No</th>
        <th>Chassis No</th>
        <th>Engine No</th>
        <th>Fuel type</th>
        <th>MFR</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while ($row = mysqli_fetch_array($result4))
    { 
      
      echo '<tr>
          <td>'.$row['regno'].'</td> 
          <td>'.$row['chassis'].'</td> 
          <td>'.$row['engine'].'</td> 
          <td>'.$row['fuel'].'</td> 
          <td>'.$row['manu'].'</td> 
          <td>'.$row['status'].'</td>
        </tr>';
    }
    ?>

    </tbody>
  </table></br></br>
  <table class="data-table">
    <thead>
      <tr>
        <th>Comment</th>
        <th>Fancy ID</th>
        <th>Reg No</th>
        <th>Plate ID</th>
        
       
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while ($row = mysqli_fetch_array($result5))
    { 
      $fidnow=$row['fid'];
    
        $sql6=  "SELECT * FROM `comment` WHERE `email` = '$fidnow' ";
        $myq=mysqli_query($conn,$sql6);
        
        while($myrow=mysqli_fetch_array($myq)){
          $comment2=$myrow['com'];
        }
      echo '<tr>
          <td>'.$comment2.'</td> 
          <td>'.$row['fid'].'</td> 
          <td>'.$row['reg'].'</td> 
          <td>'.$row['plate'].'</td> 
          
          <td>'.$row['status'].'</td>
        </tr>';
    }
    ?>

    </tbody>
  </table>
  <div class="container">
  <div class="row">
    <div class="col-md-8">
      <section>      
        <!--<h1 class="entry-title"><span>Enter details here</span> </h1>-->
       
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
              <p class="txt-para"><a href="llicense.php">Learner's License</a>   <a href="dlic.php">    Driving License</a></p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
             <i class="fa fa-mobile"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Vehicle Registration</h3>
              
              <p class="txt-para"><a href="vehicle.php">Registration And Renewal</a> </p>
            </div>
          </div>

          
 
 
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




