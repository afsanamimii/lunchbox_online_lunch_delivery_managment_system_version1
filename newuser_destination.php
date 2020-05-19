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
        	

          /*$sql="insert into user (first_name)"."values ('jiji')";*/

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

       
     $f="select first_name from user where user.first_name='$first' ";
     $res1=mysqli_query($conn,$f);
    
     if(!$res1)
        {
            die("queri failed error.....!!!!!!!!");
        }
        
         while($row=mysqli_fetch_assoc($res1))
  {

  

    foreach($row as $key=>$value)
    {
        echo" {$key}:"."{$value}";
       $check= $value;
          echo "||";
    
    }
    echo "<br /><br /><hr />"; 
  
  } 
  
echo " WELCOME " .$check;


  
    /*$l="select last_name from user where user.last_name='$last' ";
    $res2=mysqli_query($conn,$l);
    if(!$res2)
        {
            die("queri failed error.....!!!!!!!!");
        }
        $rat2=mysqli_fetch_assoc($res2);
        */

    }



	?>

   <ul><li><h2><a href="selectmenuforcustomer_source.php">  SELECT ITEM </a>
</h2></li>
 <li>   <h1><a href="customer_home.php">home</a></h1></li>

</ul>
	




</body>
</html>