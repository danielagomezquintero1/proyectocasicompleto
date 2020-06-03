<?php
session_start();

if(is_array($_FILES)) {
	if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
		$user = $_SESSION['userlogin'];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mybd";
		$sourcePath = $_FILES['userImage']['tmp_name'];
		$targetPath = "images/".$_FILES['userImage']['name'];
 		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "INSERT INTO imagenes VALUES ('$user','$targetPath')";
		$conn->query($sql);
		$sql1 = "SELECT * FROM imagenes WHERE nombreusuario='$user'";
		$result=$conn->query($sql1);
		if(move_uploaded_file($sourcePath,$targetPath)) {
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<img src=".$row["imagen"].">";
				}	
			} else {
				echo "0 results";
			}	
		}
	}
}
?>