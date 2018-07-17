<?php session_start();
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'balvig11';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
		die('Could not connect: ' . mysqli_error());
	}
$db=mysqli_select_db($conn,"passport");
if(!$db)
{
	die("No database");
}
	$No1=$_GET['var1'];
	//$password=$_POST['password'];
	//$dec_password=md5($password);
	$ret= mysqli_query($conn, "SELECT * FROM application WHERE `ID`='$No1'");
	$row=mysqli_fetch_array($ret);
	if($row>0)
	{
		$Name=$row['Name'];
		$MName=$row['Mothers_Name'];
		$Fname=$row['Fathers_Name'];
		$date=$row['Date_of_birth'];
		$gender=$row['Gender'];
		$place=$row['Place_of_birth'];
		$pdno=$row['P_Dno'];
		$Pno=rand(1,999999999);
	}
	$ret=mysqli_query($conn, "INSERT INTO passport(`Pno`,`App_No`,`P_Dno`) VALUES ('$Pno','$No1','$pdno')");
	
if(isset($_POST['submit']))
{
	$host=$_SERVER['HTTP_HOST'];
			$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
			header("location:http://localhost:8080/dbms/cover/cover.php");
}
	mysqli_close($conn);
?>  
    <!DOCTYPE html>  
    <html>  
  
    <head>  
        <title>Invoice</title>  
    </head>  
    <scriptsrc="//code.jquery.com/jquery-1.12.0.min.js">  
        </script>  
        <scriptsrc="//code.jquery.com/jquery-migrate-1.2.1.min.js">  
            </script>  
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  
            <body>  
                <form action="" method="POST">  
                    <div class="box box-primary">  
                        <div class="box-header">  
                            <h3 class="box-title">Invoice </h3>  
                        </div>  
                        <div class="box-body">  
                            <div class="form-group">  
                                ReceiptName  
                                <input type="text" name="name" class="form-control">  
                            </div>  
                            <div class="form-group">  
                                Location  
                                <input type="text" name="location" class="form-control">  
                            </div>  
                        </div>  
                        <input type="submit" class="btnbtn-primary" name="save" value="Save Record">  
                    </div><br/>  
                    <table class="table table-bordered table-hover">  
                        <thead>  
                            <th>No</th>  
                            <th>Product Name</th>  
                            <th>Quantity</th>  
                            <th>Price</th>  
                            <th>Discount</th>  
                            <th>Amount</th>  
                            <th><input type="button" value="+" id="add" class="btnbtn-primary"></th>  
                        </thead>  
                        <tbody class="detail">  
                            <tr>  
                                <td class="no">1</td>  
                                <td><input type="text" class="form-control productname" name="productname[]"></td>  
                                <td><input type="text" class="form-control quantity" name="quantity[]"></td>  
                                <td><input type="text" class="form-control price" name="price[]"></td>  
                                <td><input type="text" class="form-control discount" name="discount[]"></td>  
                                <td><input type="text" class="form-control amount" name="amount[]"></td>  
                                <td><a href="#" class="remove">Delete</td>  
</tr>  
</tbody>  
<tfoot>  
<th></th>  
<th></th>  
<th></th>  
<th></th>  
<th></th>  
<th style="text-align:center;" class="total">0<b></b></th>  
</tfoot>  
  
</table>  
</form>  
</body>  
</html>  
<script type="text/javascript">  
$(function()  
{  
$('#add').click(function()  
{  
addnewrow();  
});  
$('body').delegate('.remove','click',function()  
{  
$(this).parent().parent().remove();  
});  
$('body').delegate('.quantity,.price,.discount','keyup',function()  
{  
vartr=$(this).parent().parent();  
varqty=tr.find('.quantity').val();  
var price=tr.find('.price').val();  
  
var dis=tr.find('.discount').val();  
varamt =(qty * price)-(qty * price *dis)/100;  
tr.find('.amount').val(amt);  
total();  
});  
});  
function total()  
{  
var t=0;  
$('.amount').each(function(i,e)   
{  
varamt =$(this).val()-0;  
t+=amt;  
});  
$('.total').html(t);  
}  
functionaddnewrow()   
{  
var n=($('.detail tr').length-0)+1;  
vartr = '<tr>'+  
'<td class="no">'+n+'</td>'+  
'<td><input type="text" class="form-control productname" name="productname[]"></td>'+  
'<td><input type="text" class="form-control quantity" name="quantity[]"></td>'+  
'<td><input type="text" class="form-control price" name="price[]"></td>'+  
'<td><input type="text" class="form-control discount" name="discount[]"></td>'+  
'<td><input type="text" class="form-control amount" name="amount[]"></td>'+  
'<td><a href="#" class="remove">Delete</td>'+  
'</tr>';  
$('.detail').append(tr);   
}  
</script>  