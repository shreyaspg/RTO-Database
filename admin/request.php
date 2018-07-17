<?php
      session_start();
     
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname ='cred';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            $sql = "SELECT * FROM `license` WHERE `status` = 'issued' ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["name"]. " - Name: " . $row["blood"]. " " . $row["status"]. "<br>";
            }
            } else
           {
                 echo "0 results";
            }
            mysqli_close($conn);
         
         ?>
