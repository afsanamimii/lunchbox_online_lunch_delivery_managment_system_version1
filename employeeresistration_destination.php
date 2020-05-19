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
	<title> employee data adding</title>
</head>
<body>

	
	<?php
   


    
    if(isset($_GET["submit"]))         
    {    


  $eid=$_GET["eid"];
$username = $_GET["username"];
$email = $_GET["email"];
$password = $_GET["password"];
$phone = $_GET["phone"];
$address = $_GET["address"];



    	echo $eid;
     

          /*$sql="insert into user (first_name)"."values ('jiji')";*/

        	$sql="insert into emp_data(id,name,email,password,phone,address)"."values('$eid','$username','$email','$password','$phone','$address')";
        $res=mysqli_query($conn,$sql);

        if(!$res)
        {
        	echo "failed to resister";
        }

        else echo "Registation of employee Successful";
       while($row=mysqli_fetch_assoc($res))
  {

  

  	foreach($row as $key=>$value)
  	{
  		echo" {$key}:"."{$value}";
  	      echo "||";
  	
  	}
    echo "<br /><br /><hr />"; 
  
  } 
	  }

        

    




        
        ?>
    </body>
    </html>

