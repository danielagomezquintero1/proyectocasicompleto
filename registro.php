 <?php
 session_start();

if (isset($_POST['username1']) && $_POST['username1'] && isset($_POST['password1']) && $_POST['password1']) {

	$user = $_POST['username1'];
	$pass = $_POST['password1'];
	$lastname = $_POST['lastname'];
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



	$sql = "INSERT INTO usuarioss (firstname, lastname, email, contrasena) VALUES ('$user','$lastname','$email','".md5($pass)."')";
	$result = $conn->query($sql);

	if ($result) {
		$_SESSION['userlogin'] = $user;
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
