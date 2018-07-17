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
	$No1=$_GET['var1'];
	//$password=$_POST['password'];
	//$dec_password=md5($password);
	$ret= mysqli_query($conn, "SELECT * FROM application WHERE `ID`='$No1'");
	$row=mysqli_fetch_array($ret);
	if($row>0)
	{
		$Name=$row['Name'];
		$MName=$row['Mothers_Name'];
		$Fname=$row['Fathers_Name'];
		$date=$row['Date_of_birth'];
		$gender=$row['Gender'];
		$place=$row['Place_of_birth'];
		$pdno=$row['P_Dno'];
		$Pno=rand(1,999999999);
	}
	$ret=mysqli_query($conn, "INSERT INTO passport(`Pno`,`App_No`,`P_Dno`) VALUES ('$Pno','$No1','$pdno')");
	
if(isset($_POST['submit']))
{
	$host=$_SERVER['HTTP_HOST'];
			$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
			header("location:http://localhost:8080/dbms/cover/cover.php");
}
	mysqli_close($conn);
?>

<!doctype html>
<html>
<head>
<title>
Passport
</title>

</head>
<body>

<h2 style="border-bottom:2px solid black;font-size:30px;text-align:center;">Passport</h2>
<div class="h" style="position:relative;width:100%;margin:0px;">
<img src="1.jpg" width = 1000px style= "opacity:.3">
<table style="width:1500px; position:absolute;top:0px;text-align:center;left:0px;">
<thead>
	<td></td>
	<td></td>
</thead>
<tbody>
<tr>
<td>Passport Number</td>
<td></td>
</tr>
<tr></tr>
<tr>
<td>Name</td>
<td></td>
</tr>
<tr></tr>
<tr>
<td>Father Name</td>
<td></td>
</tr>
<tr></tr>
<tr>
<td>Date of Birth</td>
<td></td>
</tr>
<tr></tr>
<tr>
<td>Place of Birth</td>
<td></td>
</tr>
<tr></tr>
<tr>
<td>Country</td>
<td></td>
</tr>
<tr></tr>
<tr>
<td>Address</td>
<td></td>
</tr>
</tbody>
</table>
</div>

</body>
</html>