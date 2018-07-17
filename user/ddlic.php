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
            
            /*if(! get_magic_quotes_gpc() ) {
               $c_fname = addslashes ($_POST['fname']);
               $c_lname = addslashes ($_POST['lname']);
               $c_sex = addslashes ($_POST['sex']);
               $c_address = addslashes ($_POST['address']);
               $c_blood = addslashes ($_POST['blood']);
               $c_lctype = addslashes ($_POST['lctype']);
               $c_qual = addslashes ($_POST['qual']);
               $c_id=addslashes($_POST['id']);
            }else {*/
                /*if($password != $cpassword) {
                $error = true;
                $cpassword_error = "Password and Confirm Password doesn't match";*/
              
               $id = $_POST['license'];

               //$alt=$_POST['contactnum2'];
              /* $c_address = $_POST['address'];
               $c_blood = $_POST['blood'];
               $c_lctype = $_POST['lctype'];
               $c_qual = $_POST['qual'];
               $c_id=$_POST['id'];*/
            //}
          //  echo $c_fname;
              
            $sql=" SELECT * FROM license WHERE id = '$id' ";
            $result = mysqli_query($conn, $sql);
            if(!$result ) {
             Print '<script>alert("You have already applied for License !!");</script>'; 
            Print  '<script>window.location.assign("llicense.php")</script>';
            die('Error'.mysql_error());
            }
            while( $row = mysqli_fetch_assoc ( $result ))
            {
              //$did=$row['did'];
              $email=$row['email'];
              $name=$row['name'];
              $age=$row['age'];
              $type=$row['type'];
              $blood=$row['blood'];
              $dob=$row['dob'];
              $status=$row['status'];
             }
               if($status=="not issued")
            {
               Print '<script>
              alert("Your learners is not yet issued");</script>'; 
               Print  '<script>window.location.assign("profile.php")</script>';
            }else if($status=="rejected"){
              Print '<script>
              alert("Looks like your application for license was rejected please visit nearest RTO office to take the test again");</script>'; 
               Print  '<script>window.location.assign("profile.php")</script>';
            }
            else{
              $random=mt_rand(1111111111,9999999999);
              $entered=$_SESSION['userr'];
              $verify=" SELECT `id` FROM license WHERE `email` = '$entered'";
              $retval = mysqli_query( $conn,$verify);  

              while( $row = mysqli_fetch_assoc ( $retval ))
            {
              $ver=$row['id'];
            }  
            if($ver!= $id){
              Print '<script>alert("The driving id entered is not associated with your acccount!!");</script>'; 
              Print  '<script>window.location.assign("dlic.php")</script>';
            }
            else{
              $sql = ("INSERT INTO dlicense(did,email,name,age,type,blood,dob)VALUES('".$random."','".$email."','".$name."','".$age."','".$type."','".$blood."','".$dob."')");
            
            
               
            mysqli_select_db($conn,$dbname);
            $retval = mysqli_query( $conn,$sql); 
            $sql=" SELECT did FROM dlicense WHERE email = '$email' ";
            $result = mysqli_query($conn, $sql);
            while( $row = mysqli_fetch_assoc ( $result ))
            {
              $res=$row['did'];
            } 
            $_SESSION['did']=$res;

          
            if(!$retval ) {
             Print '<script>alert("You have already applied for DLicense !!");</script>'; 
            Print  '<script>window.location.assign("llicense.php")</script>';
            die('Error'.mysql_error());
            }
             Print '<script>
            alert("You have successfully applied ");</script>'; 
            Print  '<script>window.location.assign("drivupload.php")</script>';}
          mysqli_close($conn);
         }
       }
         ?>


