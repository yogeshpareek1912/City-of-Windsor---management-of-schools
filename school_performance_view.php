<?php
// Create database connection using config file
$databaseHost = 'localhost';
$databaseName = 'fantastic_school_admin_db';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM school_performance ORDER BY id DESC");
?>

<html>
<head>
    <title>Homepage</title>
</head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>

<div class="container">
  <a href="add_school_performance.php"  class="btn btn-primary">Add New School Performance</a>  <a href="index.php" class="btn btn-primary">Go to Home</a><br/><br/>
    <table width='80%' border=1>

    <tr>
        <th>School Name</th> <th>Created By</th> <th>Description</th> <th>Update</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['school_name']."</td>";
        echo "<td>".$user_data['created_by']."</td>";
        echo "<td>".$user_data['description']."</td>";
        echo "<td><a  class='btn btn-primary' href='edit_school_performance.php?id=$user_data[id]'>Edit</a> | <a class='btn btn-danger' href='delete_school_performance.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</div>
</body>
</html>