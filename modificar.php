 <?php
 session_start();

if (isset($_POST['nombrenuevo']) && $_POST['nombrenuevo'] && isset($_POST['contrasenanuevo']) && $_POST['contrasenanuevo']) {
	$user= $_SESSION['userlogin'];
	$user = $_POST['nombrenuevo'];
	$pass = $_POST['apellidonuevo'];
	$lastname = $_POST['contrasenanuevo'];
	$email = $_POST['email'];

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



	$sql = "UPDATE usuarioss SET firstname='$user' AND lastname='$lastname' AND contrasena='$contrasenanuevo' WHERE email='$user'";
	$result = $conn->query($sql);

	if ($result) {
		
	    echo json_encode(array('success' => 1));
	    
	} else {
	    echo json_encode(array('success' => 0));
	}
        $conn->close();
   
} 
else {
    echo json_encode(array('success' => 0));
}


?> 
