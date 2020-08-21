<html>
<head>
	<title>Add Users</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

	<br/><br/>

<!-- 	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form> -->







<form action="add_staff.php" method="post" name="form1">
	<div class="container">
			<a href="index.php" class="btn btn-primary">Go to Home</a>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Middle Name</label>
    <input type="text" class="form-control" name="middle_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" name="last_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name = "address" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
   
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Subject</label>
    <input type="text" name = "subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Code">
   
  </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Mobile No.</label>
    <input type="text" name = "mobile_no" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Code">
   
  </div>

 
  <div class="form-group form-check">
    
    
  </div>
  <button type="submit" name="Submit" value="Add" class="btn btn-primary">Submit</button>
  </div>
</form>




<div class="container">
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$middle_name = $_POST['middle_name'];
		$last_name = $_POST['last_name'];
		$address = $_POST['address'];
		$subject = $_POST['subject'];
$mobile_no = $_POST['mobile_no'];

		// include database connection file
		$databaseHost = 'localhost';
$databaseName = 'fantastic_school_admin_db';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO  staff(name,middle_name,last_name,address,subject,mobile_no) VALUES('$name','$middle_name','$last_name','$address','$subject','$mobile_no')");

		// Show message when user added
		echo "Staff added successfully. <a class='btn btn-primary' href='staff_view.php'>View Staff</a>";
	}
	?>
	</div>

</body>
</html>