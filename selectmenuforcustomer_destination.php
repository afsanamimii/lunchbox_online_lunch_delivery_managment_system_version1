
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
	<title>adding order</title>
</head>
<body>



<?php


if(isset($_GET["choice"]))

{

	for($x=0;$x<10;$x++)
{

	
			$item[$x]="Null";
           $quantity[$x]=0;
	           }
 $food=$_GET["choice"];
 $quantity1=$_GET["bquantity"];
 $quantity2=$_GET["pquantity"];
 $quantity3=$_GET["kquantity"];
 $quantity4=$_GET["rquantity"];
 $quantity5=$_GET["cquantity"];
 $quantity6=$_GET["vquantity"];
 $quantity7=$_GET["bequantity"];
 $quantity8=$_GET["equantity"];
 $quantity9=$_GET["wquantity"];
 $quantity10=$_GET["dquantity"];
 $fname=$_GET["fname"];
 $lname=$_GET["lname"];
 $num=$_GET["num"];
 $add=$_GET["add"];
 $price=0.0;
 $c=count($food);


 for($i=0;$i<$c;$i++)
 {

 	if($food[$i]==1)
 	{ if($quantity1>0){
 		$item[$i]="biriani";
 		$quantity[$i]= $quantity1;

 		$price=$price+(150*$quantity[$i]);


   echo" you have selected biriani ".$quantity1."plate<br>";

 	}
 }
 	if($food[$i]==2)
 	{ 
 		if($quantity2>0){
 		$item[$i]="plainrice";
 		$quantity[$i]= $quantity2;
 		
 		$price=$price+(100*$quantity[$i]);
   echo" you have selected plain rice ".$quantity2."plate<br>";
 	}
 }

 	if($food[$i]==3)
 	{ if($quantity3>0){
 		$item[$i]="khichuri";
 		$quantity[$i]= $quantity3;

 		$price=$price+(120*$quantity[$i]);
   echo" you have selected khichuri ".$quantity3."plate<br>";
 	}
 }

 	if($food[$i]==4)
 	{ if($quantity4>0){
 		$item[$i]="rice";
 		$quantity[$i]= $quantity4;

 		$price=$price+(20*$quantity[$i]);
   echo" you have selected rice ".$quantity4."plate<br>";
 	}
 }

 	if($food[$i]==5)
 	{
 		if($quantity5>0){
 		$item[$i]="chicken";
        
       
 		$quantity[$i]= $quantity5;

 		$price=$price+(90*$quantity[$i]);
   echo" you have selected chicken ".$quantity5."plate<br>";}
 	}

 	if($food[$i]==6)
 	{if($quantity6>0){
 		$item[$i]="vegetables";
 		$quantity[$i]= $quantity6;

 		$price=$price+(30*$quantity[$i]);
   echo" you have selected vegetables ".$quantity6."plate<br>";
 	}
	 	}

 	if($food[$i]==7)
 	{
 		if($quantity7>0){

       $item[$i]="beef";
       $quantity[$i]= $quantity7;
 		
 		$price=$price+(170*$quantity[$i]);
   echo" you have selected beef ".$quantity7."plate<br>";
 	}
 }

 	if($food[$i]==8)
 	{ if($quantity8>0){
 		$item[$i]="egg";
 		$quantity[$i]= $quantity8;
 	


 		$price=$price+(30*$quantity[$i]);
   echo" you have selected egg curry ".$quantity8."plate<br>";
 	}
 }

 	if($food[$i]==9)
 	{
 		if($quantity9>0){
 		$item[$i]="water";
 		$quantity[$i]= $quantity9;
 		

 		$price=$price+(25*$quantity[$i]);
   echo" you have selected water ".$quantity9."bottle<br>";
 	}
 }

 	if($food[$i]==10)
 	{ if($quantity10>0){
 		$item[$i]="desert";
 		$quantity[$i]= $quantity10;

 		$price=$price+(20*$quantity[$i]);
   echo" you have selected desert ".$quantity10."serving<br>";
 	}
 }
 }
echo "total bill is".$price."<br>";





 $sql="insert into order_list(firstname,lastname,phonenumber,item1,quantity1,item2,quantity2,item3,quantity3,item4,quantity4,item5,quantity5,item6,quantity6,item7,quantity7,item8,

     quantity8,item9,quantity9,item10,quantity10,total,address)"."values('$fname','$lname','$num','$item[0]','$quantity[0]','$item[1]','$quantity[1]','$item[2]','$quantity[2]','$item[3]','$quantity[3]','$item[4]','$quantity[4]','$item[5]','$quantity[5]','$item[6]','$quantity[6]','$item[7]','$quantity[7]','$item[8]','$quantity[8]','$item[9]','$quantity[9]','$price','$add')";
        $res=mysqli_query($conn,$sql);

        if(!$res)
        {
        	die("queri failed error.....!!!!!!!!");
        }

        else{ 


         
        
        	echo  "your order is taken" ;
         

    }

}




else
{
	echo "select at least one item/n";
	echo "You will be redirected to order page after 2 sec";

        	header("refresh:2; url=selectmenuforcustomer_source.php");
        
}


       	
    




?>

<a href="customer_home.php">home</a>
<a href=  "selectmenuforcustomer_source.php">order more</a>
</body>
</html>
