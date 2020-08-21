
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
// include database connection file
$databaseHost = 'localhost';
$databaseName = 'fantastic_school_admin_db';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
$id = $_POST['id'];

		$name = $_POST['name'];
		$school_name = $_POST['school_name'];
		$description = $_POST['description'];
		$created_by = $_POST['created_by'];
	// update user data
	$result = mysqli_query($mysqli, "UPDATE student_performance SET name='$name',school_name='$school_name',description='$description',created_by='$created_by' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: student_performance_view.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];


// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM student_performance WHERE id=$id");



while($user_data = mysqli_fetch_array($result))
{

		$name = $user_data['name'];
		$school_name = $user_data['school_name'];
		$description = $user_data['description'];
		$created_by = $user_data['created_by'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>



<form name="update_user" method="post" action="edit_student_performance.php">
	<div class="container">
    <h1>Edit Student Performance</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name"  value=<?php echo $name;?>>
    
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">School Name</label>
    <input type="text" name = "school_name" class="form-control" value=<?php echo $school_name;?>>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" name = "description" class="form-control" value=<?php echo $description;?>>
   
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Created By</label>
    <input type="text" name = "created_by" class="form-control" value=<?php echo $created_by;?>>
   
  </div>

 
  <div class="form-group form-check">
    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
    
  </div>
  <button type="submit" name="update" value="Update"  class="btn btn-primary">Update</button>
  </div>
</form>
