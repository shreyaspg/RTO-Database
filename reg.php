<?php
     if(isset($_POST['ssubmit'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname ='cred';
            $conn =  mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            
               $name = $_POST['mem_name'];
               $emailid =  $_POST['emailid'];
               $pwd =  $_POST['password'];
               $gender=$_POST['gender'];
               $phone=$_POST['contactnum'];
               $alt=$_POST['contactnum2'];
             
            $sql = ("INSERT INTO register(email,pwd,name,gender,phone,alt)VALUES('".$emailid."','".$pwd."','".$name."','".$gender."','".$phone."','".$alt."')");
               
            mysqli_select_db($conn,$dbname);
            $retval = mysqli_query( $conn,$sql);
            
            if(!$retval ) {
             Print '<script>alert("You have already registered !!");</script>'; 
            Print  '<script>window.location.assign("user/login.html")</script>';
            die('Error'.mysql_error());
            }


            Print '<script>alert("You have successfully registered");</script>'; 
            Print  '<script>window.location.assign("user/login2.php")</script>';
            
            mysqli_close($conn);
         }
         ?>


