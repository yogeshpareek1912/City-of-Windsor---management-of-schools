<?php
// include database connection file
		$databaseHost = 'localhost';
$databaseName = 'fantastic_school_admin_db';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM staff_performence WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>