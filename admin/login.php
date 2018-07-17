<?php
 
  $myname=$_POST['user'];
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'cred');
  define('DB_USER','root');
  define('DB_PASSWORD','');
  $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
  $db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
    /* $ID = $_POST['user'];
     $Password = $_POST['pass'];
      */
     function SignIn() 
     {

      $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
  $db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
  $namee=$_POST['user'];
      session_start(); 
       $_SESSION['userr']=$_POST['user'];
      if(!empty($_POST['user']))  
       { 
        $query = mysqli_query($con,"SELECT * FROM admin where user = '$_POST[user]' AND pwd = '$_POST[pass]'") or die('username already in use please use another username' .mysql_error()); 
        $row = mysqli_fetch_array($query) or 
        die(header('location:error.html').mysql_error());
         if(!empty($row['user']) AND !empty($row['pwd'])) 
          { 
            $_SESSION['user'] = $row['pwd'];
             Print '<script>alert("Successfully logged in!");</script>'; 
              Print  '<script>window.location.assign("profile.php")</script>';
          }
         else 
              {
               Print '<script>alert("Incorrect username or password!");</script>'; 
              Print  '<script>window.location.assign("login.html")</script>';
              }
                 }              }
        if(isset($_POST['ssubmit']))
        {
          SignIn();
        }


?>




  
  
