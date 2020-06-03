<?php

session_start();
if(isset($_SESSION['userlogin'])){
	$user = $_SESSION['userlogin'];
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

	$sql = "SELECT * FROM usuarioss WHERE firstname='$user'";
	$result = $conn->query($sql);

	?>
	<!DOCTYPE html>
	<html>
	<head>
		<style type="text/css">
			#es{
				display: inline-block;
				float:right;
			}
			form{
				display: inline-block;
				width:500px;
				margin-left:35.89%;
				border:1px solid black;
				padding:10px;
				padding-left: 20px;
				margin-top: 10px;
			}
			label{
				color:red;
			}
			section, h3{
				width:500px;
				margin:0 auto;
				border:2px solid black;
				padding:10px;
				padding-left: 20px;
				margin-bottom: 10px;
			}
		</style>
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<title>Privado - Página restringida a usuarios autenticados</title>
	</head>
	<body>
		<p>Hola <?php echo $_SESSION['userlogin']; ?><br>Bienvenido al área privado.</p>
		<fieldset>
			<legend>Datos</legend>
			<h4>Tus datos son</h4>
			

			<?php 
			if ($result->num_rows == 1) {
				while($row = $result->fetch_assoc()) {
					echo "<ul><li>nombre:".$row["firstname"]. ".</li> " ."<br><li>apellidos: ". $row["lastname"].".</li><br><li>email: ".$row["email"].".</li><br><li>Contrasena:".$row["contrasena"]."</li></ul>"; 
				}	
			}else {

				echo "0 results";
			}

			?>
			<a href="logout.php">Cerrar Sesión</a>
		</fieldset>
		<h3>Chat online</h3>
		<section>
			<div id="chatdiv"></div>
		</section>

		<form method="post" id="loginform">
			<span id="es">Escribe mensaje: <input type="text" id="texto" name="texto">
			<button type="submit">Enviar</button></span>
		</form>
	</body>
	<script type="text/javascript">
		$(document).ready(function() {			
			$('#loginform').submit(function(e) {
				e.preventDefault();
				$.ajax({
					type: "POST",
					url: 'chat.php',
					data: $(this).serialize(),
					success: function(response) {
						$("#chatdiv").html(response);
					}
				});
			});
		});

		$(document).ready(function() {			
			
			$.ajax({
				type: "POST",
				url: 'mostrarchat.php',
				data: $(this).serialize(),
				success: function(response) {
					$("#chatdiv").html(response);
				}
			});
		});
		

	</script>
	</html>
	<?php
}
else{
	header('WWW-Authenticate: Basic realm="Contenido restringido"');
	header("HTTP/1.0 401 Unauthorized");
	exit;
}