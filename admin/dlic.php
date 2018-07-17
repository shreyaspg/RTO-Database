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
            
            $sql = "UPDATE `dlicense` SET `status` = 'issued' WHERE `dlicense`.`did` = $name";
            $result = mysqli_query($conn, $sql);
            if(!$result ) {
             Print '<script>alert("You have already applied for License !!");</script>'; 
            Print  '<script>window.location.assign("llicense.php")</script>';
            die('Error'.mysql_error());
            }


            Print '<script>
            alert("You have authorized Driving license");</script>'; 
            Print  '<script>window.location.assign("profile.php")</script>';
            
            mysqli_close($conn);
         }if(isset($_POST['SSubmit'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname ='cred';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }

            $name=$_POST['emailid'];
           
            
            $sql = "UPDATE `dlicense` SET `status` = 'rejected' WHERE `dlicense`.`did` = $name";
            $result = mysqli_query($conn, $sql);
            if(!$result ) {
             Print '<script>alert("You have already applied for License !!");</script>'; 
            Print  '<script>window.location.assign("llicense.php")</script>';
            die('Error'.mysql_error());
            }


            Print '<script>
            alert("You have succesfully rejected license");</script>'; 
            Print  '<script>window.location.assign("profile.php")</script>';
            
            mysqli_close($conn);
         }
         ?>


