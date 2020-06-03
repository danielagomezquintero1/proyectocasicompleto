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
			#uploadForm{
				border:1px solid black;
				width:350px;
				padding: 11px;
				margin-top: 10px;
			}
			img{	
				width:150px;
				height:150px;
				border-bottom-left-radius: 4px;
				border-top-left-radius: 4px;
				margin-top: 6px;
			}
			#es{
				display: inline-block;
				float:right;
			}
			#loginform{
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
		Hola <?php echo $_SESSION['userlogin']; ?><br>Bienvenido al área privado.
		<a href="logout.php">Cerrar Sesión</a>
		<fieldset>
			<legend>Datos</legend>
			<h4>Tus datos son</h4>
			

			<?php 
			if ($result->num_rows == 1) {
				while($row = $result->fetch_assoc()) {
					echo "<ul><li>nombre:".$row["firstname"]. ".</li> " ."<br><li>apellidos: ". $row["lastname"].".</li><br><li>email: ".$row["email"].".</li><br>"; 
				}	
			}else {
				echo "0 results";
			}

			?> <li>Tu imagen de perfil: <div id="ima"> </div>
				<?php
				$sql2 = "SELECT * FROM imagenes WHERE nombreusuario='$user'";
				$result2=$conn->query($sql2);
				if ($result2->num_rows > 0) {
					while($row = $result2->fetch_assoc()) {

						echo "<br><img src=".$row["imagen"]."></li></ul>";
					}	
				} else{
					echo"";

				}
				?>
				<button id="modificar">Modificar datos</button>
				<form id="modificardatos" method="post" style="display: none">
					Nuevo nombre: <input type="text" name="nombrenuevo"><br>
					Nuevo apellido: <input type="text" name="apellidonuevo"><br>
					Nueva contraseña: <input type="text" name="contrasenanuevo">
					<button type="submit">Modificar</button>

				</form>
				<div id="insertar">
					<form id="uploadForm" action="upload.php" method="post">
						<label>Inserte una imagen de perfil</label><br/>
						<input name="userImage" type="file" class="inputFile" />
						<input type="submit" value="Subir imagen" class="btnSubmit" />
					</form>
				</div>
				<div id="mostrardatos"></div>
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
				function modificar(){
					$("#modificar").click(function(){
						$("#modificardatos").show();
					});

				}
				$(document).ready(function() {
					modificar();			
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

			//subir image
			$(document).ready(function (e){
				$("#uploadForm").on('submit',(function(e){
					e.preventDefault();
					$.ajax({
						url: "upload.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
						success: function(data){
							$("#ima").html(data);
							$("#insertar").html("");
						},
						error: function(){} 	        
					});
				}));
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