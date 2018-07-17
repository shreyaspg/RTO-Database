<?php session_start();
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
		die('Could not connect: ' . mysqli_error());
	}
$db=mysqli_select_db($conn,"cred");
if(!$db)
{
	die("No database");
}
if(isset($_POST['submit']))
{	
	$User_Name = $_POST['User_Name'];
	$Password = $_POST['Password'];
	$No1=rand(1,999999999);
	$No3=rand(1,8);
	$No2=rand(1,8);
	//$password=$_POST['password'];
	//$dec_password=md5($password);
	$ret= mysqli_query($conn, "SELECT * FROM applicant WHERE User_Name='$User_Name' and Password='$Password'");
	$num=mysqli_fetch_array($ret);
	if($num>0)
	{
	$Name= $_POST['Name'];
	$MName= $_POST['Mo_Name'];
	$FName= $_POST['Fa_Name'];
	//$date= $_POST['year']."/".$_POST['month']."/".$_POST['day'];
	$date= $_POST['day'];
	$gender= $_POST['gender'];
	$flat= $_POST['flat'];
	$area=$_POST['area'];
	$state=$_POST['state'];
	$place=$_POST['place'];
	$contact=$_POST['contact'];
	$sql = "INSERT INTO application (`ID`, `Name`, `Mothers_Name`, `Fathers_Name`, `Flat_No`, `Area/City`, `State`, `Place_of_birth`, `Gender`, `Date_of_birth`, `P_Dno`,`panel_no`) VALUES ('$No1','$Name','$MName','$FName','$flat','$area','$state','$place','$gender','$date','$No2','$No3')";
	$retval = mysqli_query($conn,$sql);
	$sql= "INSERT INTO contact (`App_ID`, `Phone_No`) values ('$No1','$contact')";
	$retval = mysqli_query($conn,$sql);
	$sql= "UPDATE `applicant` SET `Appl_ID` = '$No1' WHERE `applicant`.`User_Name` = '$User_Name'";
	$retval = mysqli_query($conn,$sql);
	if(! $retval )
	{
		die('Could not enter data: ' . mysqli_error());
	}
	else
	{	
		echo "<script>alert('Thanks for Applying. We shall get back soon!')</script>";
		$extra="welcome.php";
		$_SESSION['login']=$_POST['User_Name'];
		$_SESSION['id']=$No1;
		$_SESSION['name']=$num['Name'];
		$host=$_SERVER['HTTP_HOST'];
		$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://localhost:8080/dbms/up2/test1.php?var1=$No1");
		exit();
	}
	}
	mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<div class="container">
  <form method='post' action="">
    <div class="row">
      <h4>Account</h4>
      <div class="input-group input-group-icon">
        <input name="Name" type="text" placeholder="Full Name" required />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="input-group input-group-icon">
        <input name="Mo_Name" type="text" placeholder="Mother's Name" required />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="input-group input-group-icon">
        <input name="Fa_Name" type="text" placeholder="Father's Name" required />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
            <input name="day" type="date" required />
          </div>
          
        </div>
      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="male" id="gender-male"/>
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" value="female" id="gender-female"/>
          <label for="gender-female">Female</label>
        </div>
      </div>
    </div>
<div class="input-group input-group-icon">
        <input name="flat" type="text" placeholder="Flat No"/ required>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="input-group input-group-icon">
        <input name="area" type="text" placeholder="Area/City"/ required>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="input-group input-group-icon">
        <input name="state" type="text" placeholder="State"/ required>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="input-group input-group-icon">
        <input name="place" type="text" placeholder="Place of Birth"/ required>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="input-group input-group-icon">
        <input name="contact" type="number_format" placeholder="Contact"/ required>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input name="User_Name" type="email" placeholder="Email Address"/ required>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input name="Password" type="password" placeholder="Password"/ required>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
    
    <div class="row">
      <h4>Payment Details</h4>
      <div class="input-group">
        <input type="radio" name="payment-method" value="card" id="payment-method-card" checked="true"/>
        <label for="payment-method-card"><span><i class="fa fa-cc-visa"></i>Credit Card</span></label>
        <input type="radio" name="payment-method" value="paypal" id="payment-method-paypal"/>
        <label for="payment-method-paypal"> <span><i class="fa fa-cc-paypal"></i>Paypal</span></label>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Card Number"/>
        <div class="input-icon"><i class="fa fa-credit-card"></i></div>
      </div>
      <div class="col-half">
        <div class="input-group input-group-icon">
          <input type="text" placeholder="Card CVV"/>
          <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
      </div>
      <div class="col-half">
        <div class="input-group">
          <select>
            <option>01 Jan</option>
            <option>02 Jan</option>
          </select>
          <select>
            <option>2019</option>
            <option>2020</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>

      </div>
  <div class="input-group">
              <input name="submit" type="submit" href="http://localhost:8080/dbms/up2/test1.php"></a>
            </p>
          </div>	
    </div>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>

