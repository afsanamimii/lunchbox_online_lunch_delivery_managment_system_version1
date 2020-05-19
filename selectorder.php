<?php 

$add=$_GET['id'];
$num=$_GET['id1'];
echo $add;
echo $num;


echo"<br \>";
echo"<br \>";

$host="localhost";
$dbuser="root";
$pass="";
$dbname="delivery";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
	die("connextion failed....!!!!" .mysqli_connect_errno()); 
}

?>
<html>
<head>
	<title>Assign delivery man</title>
</head>
<body>

<form action="" method="POST">
	<table>
		<tr>
			<td>ID of delivery boy:</td>
			<td><input type="text" name="did"></td>
		</tr>
		<br>

		<tr>
			<td>Order No:</td>
			<td><input type="text" name="od"></td>
		</tr>
		<br>
	
 <tr><td>  <input type="submit" value="submit"></td></tr>
</table></form>

<?php 
     if(isset($_POST['did'] )&&isset($_POST['od']) )
   
   {
      $deid=$_POST['did'];
      $od=$_POST['od'];
   
	$sql="insert into select_deliveryman(id,oder,addr,num)"."values('$deid','$od','$add','$num')";
	$res=mysqli_query($conn,$sql);

        if(!$res)
        {
        	die("queri failed error.....!!!!!!!!");
        }

        else echo "Assign Successful";
    }

    
    

?>
<br>
<a href="lunchbox_home.php"></a>
</body>
</html>




