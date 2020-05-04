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
	<title>data adding</title>
</head>
<body>
	<?php
    
    if(isset($_POST['submit']))
    {    


    	$first=$_POST['first_name'];
    	$last=$_POST['last_name'];
    	$email=$_POST['email'];
    	$phone=$_POST['phone_number'];
    	$pass=$_POST['password'];
    	$cpass=$_POST['confirmpassword'];
    	
     
        if($pass==$cpass)
        {

        	echo "password confirmed";

        	$sql="insert into user(first_name,last_name,email,phone,password,confirm_password)"."values('$first','$last','$email','$phone','$pass','$cpass')";
        $res=mysqli_query($conn,$sql);

        if(!$res)
        {
        	die("queri failed error.....!!!!!!!!");
        }

        else{ echo "Registation Successful";

    }

        }

        else {
      
        	echo "Password Didn't Match, You will be redirected to login page after 2 sec";

        	header("refresh:2; url=newuser_source.php");
        }
       

    }

	?>
	


</body>
</html>
