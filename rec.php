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
	$email=$_SESSION['userr'];
	$ret= mysqli_query($conn, "SELECT * FROM register WHERE `email`='$email'");
	$row=mysqli_fetch_array($ret);
	if($row>0)
	{
		$id=$row['id'];
		/*$MName=$row['Mothers_Name'];
		$Fname=$row['Fathers_Name'];
		$date=$row['Date_of_birth'];
		$gender=$row['Gender'];
		$place=$row['Place_of_birth'];
		$pdno=$row['P_Dno'];
		$add=$row['Flat_No'];
		$area=$row['Area/City'];
		$state=$row['State'];
		$Pno=rand(1,999999999);*/
	}
	
	
if(isset($_POST['submit']))
{
	//window.print();
	$host=$_SERVER['HTTP_HOST'];
			$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
			header("location:http://localhost:8080/dbms/cover/cover.php");
}
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Report</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body background="1.jpg" width = 100px style= "opacity:1">
</body>
<script>
function myFunction() {
    window.print();
}
</script>
<body>
 <center><img src="digital_india_logo.jpg" width = 200px style= "opacity:1"></center> 
<div class="container">
  <form method='post' action="">
    <div class="row">
      <h4>Passport No</h4>
	  <div class="input-group input-group-icon">
        <input name="Name" type="text" value="<?php echo $id; ?>" />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
	  
	  <!--<h4>Name</h4>
      <div class="input-group input-group-icon">
        <input name="Name" type="text" value="<?php echo $Name; ?>" />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
	  <h4>Mother's Name</h4>
<div class="input-group input-group-icon">
        <input name="Mo_Name" type="text" value="<?php echo $MName; ?>" />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
	  <h4>Father's Name</h4>
<div class="input-group input-group-icon">
        <input name="Fa_Name" type="text" value="<?php echo $Fname; ?>" />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
          <input name="date" type="text" value="<?php echo $date; ?>" />
        </div>
      </div>
      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input name="gender" type="text" value="<?php echo $gender; ?>"/min="1900" max="2017" >
        </div>
      </div>
    </div>
	<h4>Address</h4>
	  <div class="input-group input-group-icon">
        <input name="Address" type="text" value="<?php echo "$add, $area, $state"; ?>" />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
<h4>Place of birth</h4>
<div class="input-group input-group-icon">
        <input name="place" type="text" value="<?php echo $place; ?>"/ >
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>-->

  <div class="input-group">
              <input name="submit" type="button" onclick="myFunction()" value="Print" href="http://localhost:8080/dbms/cover/cover.php" />
            </p>
          </div>	
    </div>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>

