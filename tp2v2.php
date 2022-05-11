<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myHR";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check Connection
if (!$conn){
    die("Connection FAILED: " . mysqli_connect_error());
}

// Membuat tabel pegawai
$sql = "CREATE TABLE employees (employee_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
first_name VARCHAR(20) NOT NULL, last_name VARCHAR(20), email VARCHAR(50) NOT NULL, phone_number VARCHAR(20) NOT NULL)";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: ". $sql. "<br>" . mysqli_error($conn); 
}
mysqli_close($conn);
?>