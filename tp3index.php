<?php
// Create database connection using config file
include_once("tp3config.php");
 
// Fetch all users data from database
$result = mysqli_query($conn, "SELECT * FROM employees ORDER BY employee_id DESC");
?>
 
<html>
<head>    
    <title>Employees</title>
</head>
 
<body>
<a href="tp3add.php">Add Employee</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>First Name</th> <th>Last Name</th> <th>Email</th> <th>Phone Number</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['first_name']."</td>";
        echo "<td>".$user_data['last_name']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['phone_number']."</td>";      
        echo "<td><a href='tp3edit.php?employee_id=$user_data[employee_id]'>Edit</a> | <a href='tp3delete.php?employee_id=$user_data[employee_id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>