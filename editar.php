 <?php
 session_start();

 if (isset($_POST['nombrenuevo']) && $_POST['nombrenuevo'] && isset($_POST['apellidonuevo']) && $_POST['apellidonuevo']) {

 	$userr = $_SESSION['userlogin'];
 	$user = $_POST['nombrenuevo'];
 	$pass = $_POST['apellidonuevo'];

 	$servername = "localhost";
 	$username = "root";
 	$password = "";
 	$dbname = "mybd";

	// Create connection
 	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
 	if ($conn->connect_error) {
 		die("Connection failed: " . $conn->connect_error);
 	}



 	$sql = "UPDATE usuarioss SET  firstname= '$user', lastname= '$pass' WHERE email='$userr'";
 	$result = $conn->query($sql);

 	$sql2 = "SELECT * FROM usuarioss WHERE email='$userr'";
 	$result2=$conn->query($sql2);
 	if ($result2->num_rows > 0) {
 		while($row = $result2->fetch_assoc()) {
 			$_SESSION['userlogin'] = $user;
 			$nombre = $row["firstname"];
 			$segundo = $row["lastname"];
 			$tercero = $row["email"];
 			echo "<div class='col-12'><h6>Primer nombre:". $nombre."</h6></div>";
 			echo "<div class='col-12'><h6>Segundo nombre:". $segundo."</h6></div>";
 		}	echo "<div class='col-12'><h6>Segundo nombre:". $tercero."</h6></div>";
 	} else{
 		echo"";

 	}

 	$conn->close();

 } 
 else {
 	echo json_encode(array('success' => 0));
 }


 ?> 
