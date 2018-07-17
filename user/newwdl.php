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
                $email=$_SESSION['userr'];
               $name = $_POST['emailid'];
               $age =  $_POST['password'];
               $type =  $_POST['gender'];
               $blood=$_POST['bgrup'];
               $dob=$_POST['contactnum'];
               
               //$alt=$_POST['contactnum2'];
              /* $c_address = $_POST['address'];
               $c_blood = $_POST['blood'];
               $c_lctype = $_POST['lctype'];
               $c_qual = $_POST['qual'];
               $c_id=$_POST['id'];*/
            //}
          //  echo $c_fname;
            $sql = ("INSERT INTO dlicense(email,name,age,type,blood,dob)VALUES('".$email."','".$name."','".$age."','".$type."','".$blood."','".$dob."')");
               
            mysqli_select_db($conn,$dbname);
            $retval = mysqli_query( $conn,$sql);
            $sql=" SELECT id FROM license WHERE email = '$email' ";
            $result = mysqli_query($conn, $sql);
            while( $row = mysqli_fetch_assoc ( $result ))
            {
              $res=$row['id'];
            } 
            $_SESSION['id']=$res;
            

            if(!$retval ) {
             Print '<script>alert("You have already applied for License !!");</script>'; 
            Print  '<script>window.location.assign("llicense.php")</script>';
            die('Error'.mysql_error());
            }


            Print '<script>
            alert("You have successful applied for Learners License ");</script>'; 
            Print  '<script>window.location.assign("info.php")</script>';
            
            mysqli_close($conn);
         }
         ?>


