<?php
  session_start();
  //$myname=$_POST['user'];
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'cred');
  define('DB_USER','root');
  define('DB_PASSWORD','');
  $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
  $db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
  $id=$_POST['learners'];    
  $query = mysqli_query($con,"SELECT `status` FROM license where `id` = '$id'");
  if(mysqli_num_rows($query)==0)
            {
              Print '<script>alert("Invalid driving license id!!");</script>'; 
           

           Print  '<script>window.location.assign("status.php")</script>';
            }
  while($row = mysqli_fetch_array($query))
    $ans=$row['status'];
        $_SESSION['lstatus']=$ans;
        echo $_SESSION['lstatus'];
        Print  '<script>window.location.assign("status.php")</script>';
  ?>




  
  
