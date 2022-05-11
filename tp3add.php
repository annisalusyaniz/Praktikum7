<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="tp3index.php">Go to Home</a>
	<br/><br/>
 
	<form action="tp3add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="firstname"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lastname"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
            <tr> 
				<td>Phone Number</td>
				<td><input type="text" name="phonenumber"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
		
		// include database connection file
		include_once("tp3config.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO employees(first_name,last_name,email,phone_number) VALUES('$firstname','$lastname','$email','$phonenumber')");
		
		// Show message when user added
		echo "User added successfully. <a href='tp3index.php'>View Users</a>";
	}
	?>
</body>
</html>