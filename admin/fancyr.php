<?php
      session_start();
      $nowemail=$_SESSION['userr'];
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
            alert("You have authorized Fancy number");</script>'; 
            Print  '<script>window.location.assign("profile.php")</script>';
            
            mysqli_close($conn);
         }
          if(isset($_POST['SSubmit'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname ='cred';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
            $comment=$_POST['comment'];
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }

            $name=$_POST['emailid'];
           
             $sql3 = ("INSERT INTO comment(com,email)VALUES('".$comment."','".$name."')");
              $result2 = mysqli_query($conn, $sql3);
              if(!result2)
              {
            Print '<script>alert("You have already applied for fancy number !!");</script>'; 
            //Print  '<script>window.location.assign("llicense.php")</script>';
            die('Error'.mysql_error());

              }
            $sql = "UPDATE `fancy` SET `status` = 'rejected' WHERE `fancy`.`fid` = $name";
            $result = mysqli_query($conn, $sql);
            if(!$result ) {
             Print '<script>alert("You have already applied for fancy number !!");</script>'; 
            Print  '<script>window.location.assign("llicense.php")</script>';
            die('Error'.mysql_error());
            }


            Print '<script>
            alert("You have succesfully rejected fancy request");</script>'; 
            Print  '<script>window.location.assign("profile.php")</script>';
            
            mysqli_close($conn);
         }
         ?>


