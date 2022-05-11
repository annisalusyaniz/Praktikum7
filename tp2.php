<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create Connection
$conn = mysqli_connect($servername, $username, $password);
// Check Connection
if (!$conn){
    die("Connection FAILED: " . mysqli_connect_error());
}

// Create Database
$sql = "CREATE DATABASE myHR";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>