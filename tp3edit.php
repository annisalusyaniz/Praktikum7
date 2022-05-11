<?php
// include database connection file
include_once("tp3config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['employee_id'];
	
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$email = $_POST['email'];
    $phonenumber = $_POST['phone_number'];
		
	// update user data
	$result = mysqli_query($conn, "UPDATE employees SET first_name='$firstname',last_name='$lastname',email='$email',phone_number='$phonenumber' WHERE employee_id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: tp3index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['employee_id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM employees WHERE employee_id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$firstname = $user_data['first_name'];
	$lastname = $user_data['last_name'];
	$email = $user_data['email'];
    $phonenumber = $user_data['phone_number'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="tp3index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="tp3edit.php">
		<table border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="first_name" value="<?php echo $firstname;?>"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="last_name" value="<?php echo $lastname;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr> 
				<td>Phone Number</td>
				<td><input type="text" name="phone_number" value="<?php echo $phonenumber;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="employee_id" value="<?php echo $_GET['employee_id'];?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>