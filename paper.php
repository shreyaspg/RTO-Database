<?php 
  session_start();
  ?>


<html>
<body>
<?php
$connection = mysqli_connect("localhost", "root", "","cred"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"cred"); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$file = rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder="uploads/";
// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	$email=$_SESSION['userr'];
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file) )
	{

		$sql="INSERT INTO doc2 VALUES('$email','$final_file','$file_type','$new_size')";
		$result=mysqli_query($connection,$sql);
		
		if($result!=0){
			Print '<script>
            alert("Successfully Applied");</script>'; 
            Print  '<script>window.location.assign("user/veh/vreginfo.php")</script>';
			
		
		}
		else
			Print '<script>
            alert("You have already uploaded documents");</script>'; 
            Print  '<script>window.location.assign("user/profile.php")</script>';
		
	}
	else
	{
		header("location: upload.php");
		
	}	
}
mysqli_close($connection);
?> 
</html>
</body>