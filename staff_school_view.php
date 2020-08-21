<?php
// Create database connection using config file
$databaseHost = 'localhost';
$databaseName = 'fantastic_school_admin_db';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM schools ORDER BY id DESC");
?>

<html>
<head>
    <title>Homepage</title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
<a href="add.php"  class="btn btn-primary">Add New School</a><br/><br/>
<div class="container">
    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['address']."</td>";
        echo "<td>".$user_data['code']."</td>";
        echo "<td><a  class='btn btn-primary' href='edit.php?id=$user_data[id]'>Edit</a> | <a class='btn btn-danger' href='delete2.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</div>
</body>
</html>