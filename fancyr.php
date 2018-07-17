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

            $name=$_POST['emailid'];
            
            $sql = "UPDATE `fancy` SET `status` = 'issued' WHERE `fancy`.`fid` = $name";
            $result = mysqli_query($conn, $sql);
            if(!$result ) {
             Print '<script>alert("You have already applied for Vehicle registration !!");</script>'; 
            Print  '<script>window.location.assign("llicense.php")</script>';
            die('Error'.mysql_error());
            }


            Print '<script>
            alert("You have authorized vehicle registration");</script>'; 
            Print  '<script>window.location.assign("profile.php")</script>';
            
            mysqli_close($conn);
         }
         ?>


