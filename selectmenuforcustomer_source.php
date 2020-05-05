<html>
<head>
	<h1> welcome to lunchbox </h1>
	<br>
	</head>

	<body>
   
   	<h1>Please Select The Item You Want To Order</h1>
		<br>
		<form action="selectmenuforcustomer_destination.php" method="get">
		<input type="checkbox" name="choice[]" value="1">biriani,price 150/plate 
		<table>
		<tr>
			<td>quantity:</td>
			<td><input type="text" name="bquantity"></td>
		</tr>
		<br>
	</table>


		<input type="checkbox" name="choice[]" value="2">plain rice,price 100/plate

			<table>	<tr>
			<td>quantity:</td>
			<td><input type="text" name="pquantity"></td>
		</tr>

		<br>
	</table>

		<input type="checkbox" name="choice[]" value="3">khichuri,price 120/plate

				<table><tr>
			<td>quantity:</td>
			<td><input type="text" name="kquantity"></td>
		</tr>

</table>
		<input type="checkbox" name="choice[]" value="4">rice ,price 20/plate

				<table><tr>
			<td>quantity:</td>
			<td><input type="text" name="rquantity"></td>
		</tr>
		<br>

</table>
		<input type="checkbox" name="choice[]" value="5">chicken,price 90 tk

				<table><tr>
			<td>quantity:</td>
			<td><input type="text" name="cquantity"></td>
		</tr>
		<br>
		
		
   </table>

   <input type="checkbox" name="choice[]" value="6">vagetables,price 30/plate 
		<table>
		<tr>
			<td>quantity:</td>
			<td><input type="text" name="vquantity"></td>
		</tr>
		<br>
	</table>

	<input type="checkbox" name="choice[]" value="7">beef,price 170/plate 
		<table>
		<tr>
			<td>quantity:</td>
			<td><input type="text" name="bequantity"></td>
		</tr>
		<br>
	</table>

	<input type="checkbox" name="choice[]" value="8">egg curry,price 30/plate 
		<table>
		<tr>
			<td>quantity:</td>
			<td><input type="text" name="equantity"></td>
		</tr>
		<br>
	</table>

	<input type="checkbox" name="choice[]" value="9">water 1 litre,price 25tk/bottle 
		<table>
		<tr>
			<td>quantity:</td>
			<td><input type="text" name="wquantity"></td>
		</tr>
		<br>
	</table>

	<input type="checkbox" name="choice[]" value="10">desert,price 20/serving
		<table>
		<tr>
			<td>quantity:</td>
			<td><input type="text" name="dquantity"></td>
		</tr>
		<br>
	</table>
   <input type="submit" value="order">
		
</form>
	</body>
</html>