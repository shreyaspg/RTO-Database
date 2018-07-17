<?php
      session_start();
      if(isset($_POST['Submit'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname ='cred';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
        
               $email=$_SESSION['userr'];
               $name = $_POST['emailid'];
               $age =  $_POST['password'];
               $type =  $_POST['gender'];
               $blood=$_POST['bgrup'];
               $dob=$_POST['contactnum'];
               
            
            $sql=" SELECT * FROM license WHERE email = '$email' ";
            $result = mysqli_query($conn, $sql);
            while( $row = mysqli_fetch_assoc ( $result ))
            {
              $res=$row['name'];
            } 
            $_SESSION['name']=$res;
            

            if(!$result ) {
            Print  '<script>window.location.assign("llicense.php")</script>';
            die('Error'.mysql_error());
            }


           
            Print  '<script>window.location.assign("userdetails.php")</script>';
            
            mysqli_close($conn);
         }
         ?>


