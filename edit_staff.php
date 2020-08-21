
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
		$middle_name = $_POST['middle_name'];
		$last_name = $_POST['last_name'];
		$address = $_POST['address'];
		$subject = $_POST['subject'];
		$mobile_no = $_POST['mobile_no'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE staff SET name='$name',middle_name='$middle_name',last_name='$last_name',address='$address',subject='$subject',mobile_no='$mobile_no' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: staff_view.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];


// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM staff WHERE id=$id");



while($user_data = mysqli_fetch_array($result))
{

		$name = $user_data['name'];
		$middle_name = $user_data['middle_name'];
		$last_name = $user_data['last_name'];
		$address = $user_data['address'];
		$subject = $user_data['subject'];
		$mobile_no = $user_data['mobile_no'];

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



<form name="update_user" method="post" action="edit_staff.php">
	<div class="container">
		<h1>Edit Staff Detail</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name"  value=<?php echo $name;?>>
    
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Middle Name</label>
    <input type="text" name = "middle_name" class="form-control" value=<?php echo $middle_name;?>>
   
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" name = "last_name" class="form-control" value=<?php echo $last_name;?>>
   
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name = "address" class="form-control" value=<?php echo $address;?>>
   
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Subject</label>
    <input type="text" name = "subject" class="form-control" value=<?php echo $subject;?>>
   
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Mobile No.</label>
    <input type="text" name = "mobile_no" class="form-control" value=<?php echo $mobile_no;?>>
   
  </div>
 
  <div class="form-group form-check">
    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
    
  </div>
  <button type="submit" name="update" value="Update"  class="btn btn-primary">Update</button>
  </div>
</form>
