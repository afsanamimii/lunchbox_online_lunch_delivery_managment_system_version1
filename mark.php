<?php 

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
	<title>mark as deliver</title>
</head>
<body>

<form action="" method="POST">
	<table>
		<tr>
			<td>phone number of customer whose item is delivered:</td>
			<td><input type="text" name="phone"></td>
		</tr>
		 <tr><td>  <input type="submit" value="submit"></td></tr>
		<br>
	</table></form>

	<?php 
     if(isset($_POST['phone'] ))
   
   {
      $pho=$_POST['phone'];
      
   
	$sql="insert into markstatus(phone,status)"."values('$pho','delivered')";
	$res=mysqli_query($conn,$sql);

        if(!$res)
        {
        	die("queri failed error.....!!!!!!!!");
        }

        else echo "Marking Successful";
    }

    
    

?>
<br>
<a href="lunchbox_home.php"></a>
</body>
</html>