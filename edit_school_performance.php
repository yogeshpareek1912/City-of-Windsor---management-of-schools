
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

		$name = $_POST['school_name'];
		$email = $_POST['created_by'];
		$mobile = $_POST['description'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE school_performance SET school_name='$name',created_by='$email',description='$mobile' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: school_performance_view.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];


// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM school_performance WHERE id=$id");



while($user_data = mysqli_fetch_array($result))
{
		$name = $user_data['school_name'];
		$email = $user_data['created_by'];
		$mobile = $user_data['description'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<!-- 	<a href="index.php">Home</a>
		<br/><br/>

		<form name="update_user" method="post" action="edit.php">
			<table border="0">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value=<?php echo $name;?>></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value=<?php echo $email;?>></td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
	</body>
	</html>
 -->



<form name="update_user" method="post" action="edit_school_performance.php">
	<div class="container">
		<h1>Edit School Performance</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="school_name"  value="<?php echo $name;?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name = "created_by" class="form-control" value="<?php echo $email;?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
   
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Code</label>
    <input type="text" name = "description" class="form-control" value="<?php echo $mobile;?>"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Code">
   
  </div>

 
  <div class="form-group form-check">
    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
    
  </div>
  <button type="submit" name="update" value="Update"  class="btn btn-primary">Update</button>
  </div>
</form>
