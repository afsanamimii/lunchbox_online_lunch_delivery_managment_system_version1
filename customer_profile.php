<?php 



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
	<title>MY PROFILE</title>
</head>
<body>

<form action="" method="POST">
	<table>
		<tr>
			<td>INPUT YOUR PHONE NUMBER:</td>
			<td><input type="text" name="num"></td>
		</tr>
		<br>

		<br>
	
 <tr><td>  <input type="submit" value="submit"></td></tr>
</table></form>

<?php 
     if(isset($_POST['num'] ))
   
   {
     $phone=$_POST['num'];
   
	$sql="select * from user where user.phone='$phone' ";
	$res=mysqli_query($conn,$sql);

        if(!$res)
        {
        	die("queri failed error.....!!!!!!!!");
        }

            
         while($row=mysqli_fetch_assoc($res))
  {

  

    foreach($row as $key=>$value)
    {
        echo" {$key}:"."{$value}";
          echo "||";
    
    }
    echo "<br /><br /><hr />"; 
  
  }}


  

    
    

?>
<br>
<h1><a href="customer_home.php">home</a></h1>
</body>
</html>




