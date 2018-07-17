<?php session_start();
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'balvig11';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
		die('Could not connect: ' . mysqli_error());
	}
$db=mysqli_select_db($conn,"passport");
if(!$db)
{
	die("No database");
}
if(isset($_POST['submit']))
{	
	$User_Name = $_POST['User_Name'];
	$Password = $_POST['Password'];
	//$No1=$_GET['var1'];
	$No3=rand(1,8);
	$No2=rand(1,8);
	//$password=$_POST['password'];
	//$dec_password=md5($password);
	$sql= "SELECT * from `applicant` WHERE `applicant`.`User_Name` = '$User_Name'";
	$retval = mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($retval);
	if($row>0)
	{
		$No1=$row['Appl_ID'];
	}
	$ret= mysqli_query($conn, "SELECT * FROM application WHERE ID='$No1'");
	$num=mysqli_fetch_array($ret);
	if($num>0)
	{
	$Name= $_POST['Name'];
	$MName= $_POST['Mo_Name'];
	$FName= $_POST['Fa_Name'];
	$date= $_POST['year']."/".$_POST['month']."/".$_POST['day'];
	$gender= $_POST['gender'];
	$flat= $_POST['flat'];
	$area=$_POST['area'];
	$state=$_POST['state'];
	$place=$_POST['place'];
	$contact=$_POST['contact'];
	
	$sql = "UPDATE application set `Name`='$Name',  `Flat_No`='$flat' , `Area/City`='$area' , `State`='$state' , `Place_of_birth`='$place' , `Gender`='$gender' , `Date_of_birth`='$date' WHERE `ID`='$No1'";
	$retval = mysqli_query($conn,$sql);
	$sql = "UPDATE application set `Mothers_Name`='$MName' , `Fathers_Name`='$FName' WHERE `ID`='$No1'";
	$retval = mysqli_query($conn,$sql);
	if(! $retval )
	{
		die('Could not enter data: ' . mysqli_error());
	}
	$sql= "UPDATE contact set `Phone_No`='$contact' WHERE App_ID='$No1'";
	$retval = mysqli_query($conn,$sql);
	$sql= "UPDATE `applicant` SET `Appl_ID` = '$No1' WHERE `applicant`.`User_Name` = '$User_Name'";
	$retval = mysqli_query($conn,$sql);
	if(! $retval )
	{
		die('Could not enter data: ' . mysqli_error());
	}
	else
	{	
		echo "<script>alert('Thanks for Applying. We shall get back soon!');</script>";
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
if(isset($_POST['skip']))
{
	$User_Name = $_POST['User_Name'];
	$Password = $_POST['Password'];
	$sql= "SELECT * from `applicant` WHERE `applicant`.`User_Name` = '$User_Name'";
	$retval = mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($retval);
	if($row>0)
	{
		$No1=$row['Appl_ID'];
	}
	$host=$_SERVER['HTTP_HOST'];
		$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://localhost:8080/dbms/up2/test1.php?var1=$No1");
		exit();
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
        <input name="Name" type="text" placeholder="Full Name" />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="input-group input-group-icon">
        <input name="Mo_Name" type="text" placeholder="Mother's Name" />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="input-group input-group-icon">
        <input name="Fa_Name" type="text" placeholder="Father's Name" />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
          <div class="col-third">
            <input name="day" type="text" placeholder="DD"/ min="01" max="31" >
          </div>
          <div class="col-third">
            <input name="month" type="text" placeholder="MM"/min="01" max="12" >
          </div>
          <div class="col-third">
            <input name="year" type="text" placeholder="YYYY"/min="1900" max="2017" >
          </div>
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
        <input name="flat" type="text" placeholder="Flat No"/ >
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="input-group input-group-icon">
        <input name="area" type="text" placeholder="Area/City"/ >
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="input-group input-group-icon">
        <input name="state" type="text" placeholder="State"/ >
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="input-group input-group-icon">
        <input name="place" type="text" placeholder="Place of Birth"/ >
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="input-group input-group-icon">
        <input name="contact" type="number_format" placeholder="Contact"/ >
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
    
   
  <div class="input-group">
              <input name="submit" type="submit" value="Update">
			  <input name="skip" type="submit" value="Skip">
            </p>
          </div>	
    </div>
  </form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>

