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
               $did = $_POST['emailid'];
               $chassis = $_POST['password'];
               //echo strlen($chassis);
               if(strlen($chassis<6)){
                Print '<script>alert("chassis !!");</script>'; 
            Print  '<script>window.location.assign("profile.php")</script>';
            die('Error'.mysql_error());
          }
               $eng =  $_POST['eng'];
               $reg=$_POST['reg'];
               $fuel=$_POST['fuel'];
               $manu=$_POST['manu'];
               $model=$_POST['model'];

            if(!$did){
             Print '<script>alert("You do not have a registered license !!");</script>'; 
            Print  '<script>window.location.assign("profile.php")</script>';
            die('Error'.mysql_error());
            }
              /* $c_address = $_POST['address'];
               $c_blood = $_POST['blood'];
               $c_lctype = $_POST['lctype'];
               $c_qual = $_POST['qual'];
               $c_id=$_POST['id'];*/
            //}
          //  echo $c_fname;
            $check=("SELECT `did` FROM `dlicense` WHERE `did`=$did ");
            $chret=mysqli_query($conn,$check);
            if(mysqli_num_rows($chret)==0)
            {
              Print '<script>alert("Invalid driving license id!!");</script>'; 
           Print  '<script>window.location.assign("vehicle.php")</script>';
           die('Error'.mysql_error());
            }
             $check=("SELECT `status` FROM `dlicense` WHERE `did`=$did ");
            $chret=mysqli_query($conn,$check);
            if($row=mysqli_fetch_array($chret))
            {
              $finale=$row['status'];
            }
           // echo $finale;
            $issued="issued";
            if($finale!= $issued)
            {
               Print '<script>alert("License not issued yet!!");</script>'; 
               Print  '<script>window.location.assign("profile.php")</script>';
               die('Error'.mysql_error());
            }else{
            $random=mt_rand(1111111111,9999999999);
            $_SESSION['vregno']=$random;
            $sql = ("INSERT INTO vehicle(email,regno,did,chassis,engine,reg,fuel,manu,model)VALUES('".$email."','".$random."','".$did."','".$chassis."','".$eng."','".$reg."','".$fuel."','".$manu."','".$model."')");
               
            mysqli_select_db($conn,$dbname);
            $retval = mysqli_query( $conn,$sql);
            
            if(!$retval ) {
             Print '<script>alert("You have already registered homie !!");</script>'; 
            Print  '<script>window.location.assign("profile.php")</script>';
            die('Error'.mysql_error());
            }

             Print '<script>
            alert("Please upload the documents");</script>'; 
            Print  '<script>window.location.assign("../upload.php")</script>';
          }
            


            
            mysqli_close($conn);
         }
         ?>


