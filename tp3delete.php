<?php
// include database connection file
include_once("tp3config.php");
 
// Get id from URL to delete that user
$id = $_GET['employee_id'];
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM employees WHERE employee_id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:tp3index.php");
?>