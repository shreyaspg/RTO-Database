<?php 
  session_start();

  $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname ='cred';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
            $email= $_SESSION['userr'];
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            $sql = "SELECT * FROM `register` WHERE `email` = '$email' ";
            $sql2 =  "SELECT * FROM `license` WHERE `email` = '$email' ";
            $sql3 =  "SELECT * FROM `dlicense` WHERE `email` = '$email' ";
            $sql4 =  "SELECT * FROM `vehicle` WHERE `email` = '$email' ";
            $sql5 =  "SELECT * FROM `fancy` WHERE `email` = '$email' ";
            $result = mysqli_query($conn, $sql);
            $result2 = mysqli_query($conn, $sql2);
            $result3= mysqli_query($conn, $sql3);
            $result4= mysqli_query($conn, $sql4);
            $result5= mysqli_query($conn, $sql5);

            while ($row = mysqli_fetch_array($result))          
                {
                  $name=$row['name'];
                $phone=$row['phone'];
              }
              while ($row = mysqli_fetch_array($result3))          
                {
                  $id=$row['did'];
                $type=$row['type'];
                $status=$row['status'];
              }
          
            mysqli_close($conn);


         
      
    
?>






<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Report</title>
    <script>
function myFunction() {
    window.print();
}</script>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="logo.jpg" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                               Regional Transport Office<br>
                                Bengaluru<br>
                                Karnataka   
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Drivers's License
                   
                </td>
                
                <td>
                    Details #
                </td>
            </tr>
            <tr class="details">
                <td>
                    Drivers's Name
                </td>
                
                <td>
                   <?php echo $name?> 
                </td>
            </tr>
            <tr class="details">
                <td>
                    Drivers's Phone Number
                </td>
                
                <td>
                   <?php echo $phone?> 
                </td>
            </tr>
            <tr class="details">
                <td>
                    Drivers's License ID
                </td>
                
                <td>
                   <?php echo $id?> 
                </td>
            </tr>
             <tr class="details">
                <td>
                    License For
                </td>
                
                <td>
                    <?php echo $type?> 
                </td>
            </tr>
             <tr class="details">
                <td>
                    Status
                </td>
                
                <td>
                    <?php echo $status?> 
                </td>
            </tr>
             <tr class="details">
                <td>
                    Issued on
                </td>
                
                <td>
                    <?php echo date("d/m/y")?> 
                </td>
            </tr>
             <tr class="details">
                <td>
                   
                </td>
                
                <td>
                    -------------
                </td>
            </tr>

            
            <tr class="details">
                <td>
                   
                </td>
                
                <td>
                   Officer's Signature
                </td>
            </tr>
                

            </tr>
        </table>
        <input name="submit" type="button" onclick="myFunction()" value="Print" href="#" />
    </div>

</body>
</html>
