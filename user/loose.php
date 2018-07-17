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
              
               
            mysqli_select_db($conn,$dbname);
            $retval = mysqli_query( $conn,$sql);
            $sql=" SELECT fid FROM fancy WHERE email = '$email' ";
            $result = mysqli_query($conn, $sql);
            while( $row = mysqli_fetch_assoc ( $result ))
            {
              $res=$row['fid'];
            } 
            $_SESSION['fid']=$res;
            

            if(!$retval ) {
             Print '<script>alert("You have already applied for fancy number !!");</script>'; 
            Print  '<script>window.location.assign("llicense.php")</script>';
            die('Error'.mysql_error());
            }


            Print '<script>
            alert("You have successful applied for a fancy number");</script>'; 
            Print  '<script>window.location.assign("infooo.php")</script>';
            
            mysqli_close($conn);
         }
         ?>


