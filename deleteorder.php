<?php 


$phn=$_GET['id'];

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
<!DOCTYPE html>
<html>
<head>
	<title>Deleting Order</title>
</head>
<body>

	<?php
    

    $sql="delete from order_list where phonenumber='$phn'";
    $res=mysqli_query($conn,$sql);

        if(!$res)
        {
        	die("queri failed error.....!!!!!!!!");
        }

        else echo "delete Successful";

	?>

</body>
</html>