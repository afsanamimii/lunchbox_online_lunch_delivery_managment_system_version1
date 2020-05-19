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

<!DOCTYPE html>
<html>
<head>
	<title>ORDER LIST</title>
</head>
<body>
<?php


	$sql="select * from order_list";
	$res=mysqli_query($conn,$sql);

   while($row=mysqli_fetch_assoc($res))
  {

  $ph=$row['phonenumber'];
  $ad=$row['address'];
  

  echo $ph;

  echo"<br>";

  	foreach($row as $key=>$value)
  	{
  		echo" {$key}="."{$value}";
  	      echo "<br>";

  	
  	
  	}
  	
 
  

  	echo " <a href='selectorder.php?id= $ph & id1=$ad ' > select </a>
   /
  <a href='deleteorder.php?id=$ph '> Cancel </a>
    ";
    echo "<br /><br /><hr />";
  } 
 
  	

?>
   

</body>
</body>
</html>