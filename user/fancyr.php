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
               $dl = $_POST['dl'];
               $reg = $_POST['reg'];
               $plate =  $_POST['password'];
               $amt =  $_POST['eng'];
               //echo $email,$dl,$reg,$plate,$amt;
               /*$blood=$_POST['bgrup'];
               $dob=$_POST['contactnum'];*/
               
               //$alt=$_POST['contactnum2'];
              /* $c_address = $_POST['address'];
               $c_blood = $_POST['blood'];
               $c_lctype = $_POST['lctype'];
               $c_qual = $_POST['qual'];
               $c_id=$_POST['id'];*/
            //}
          //  echo $c_fname;
               $random=mt_rand(1111111111,9999999999);
            $sql = ("INSERT INTO fancy(fid,dl,email,reg,plate,amt)VALUES('".$random."','".$dl."','".$email."','".$reg."','".$plate."','".$amt."')");
               
            mysqli_select_db($conn,$dbname);
            $retval = mysqli_query( $conn,$sql);
            $sql3=" SELECT fid FROM fancy WHERE email = '$email' ";
            $result = mysqli_query($conn, $sql3);
            $sql2=" SELECT did FROM dlicense WHERE did = '$dl' ";
            $result2 = mysqli_query($conn, $sql2);
            if(mysqli_num_rows($result2)==0)
            {
              Print '<script>alert("Invalid driving id");</script>'; 
            Print  '<script>window.location.assign("fancy.php")</script>';
            die('Error'.mysql_error());
            }
            
            while( $row = mysqli_fetch_assoc ( $result ))
            {
              $res=$row['fid'];
            } 
            $_SESSION['fid']=$res;
            
            $sql3="UPDATE `numb` SET `avail` = 'not available' WHERE `numb`.`id` = $plate";
            $result3 = mysqli_query($conn, $sql3);
            

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


