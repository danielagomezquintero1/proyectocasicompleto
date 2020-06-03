
<?php
$servername = "localhost";
$id=$_POST['id'];
$username=$_POST['username'];
 	$username = "root";
 	$password = "";
 	$dbname = "photogram";

	// Create connection
 	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
 	if ($conn->connect_error) {
 		die("Connection failed: " . $conn->connect_error);
 	}



 	$sql = "UPDATE users SET username='$username' WHERE id='$id'";
 	$result = $conn->query($sql);
 	echo $result;