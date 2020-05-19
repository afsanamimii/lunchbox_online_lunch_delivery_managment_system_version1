
<html>
<head>
	<title>Register Form</title>
</head>

<body>
<h1>Employee Register Form</h1>
	<form action="employeeresistration_destination.php" method="get">
		<table>

			<tr>
			<td>ID:</td>
			<td><input type="text" name="eid"></td>
		</tr>
			
			<tr>
				<td>
					Name:
				</td>
				
				<td>
					<input type="text"  name="username">
				</td>
			</tr>
			
			<tr>
				<td>
					Email:
				</td>
				
				<td>
					<input type="text" name="email" >
				</td>
			</tr>
			
			<tr>
				<td>
					Password:
				</td>
				
				<td>
					<input type="text"  name="password" >
				</td>
			</tr>
			<tr>
				<td>
					Phone:
				</td>
				
				<td>
					<input type="text"  name="phone" >
				</td>
			</tr>
			
			<tr>
				<td>
					Address:
				</td>
				
				<td>
					<input type="text"  name="address">
				</td>
			</tr>
			
			<tr>
				<td>
					<input type="submit" value="submit">
				</td>
			</tr>
			
		</table>
	</form>
</body>

</html>