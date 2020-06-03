<?php
//Si existe una id en la url... luego verificamos si esa id la tiene un usuario y la mostramos por pantalla


if(empty($_REQUEST['id'])){
	header("location: home.php");
} else{
	echo"existe un usuario";
	$idusuario = $_REQUEST['id'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "photogram";

  // Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}


	if(!empty($_POST)){ //si le damos al boton aceptar
	$idusuario = $_POST['idusuario']; //recogemos el valor del formulario...metodo rapido para recoger el id del usuario
	$sql = "DELETE FROM users WHERE id='$idusuario'";
	$sqlpubli = "DELETE FROM publicaciones WHERE user='$idusuario'"; //tambn borra las publicaciones que tiene

	//hay que borrar mas


	$conn->query($sqlpubli);
    $result = $conn->query($sql);
    if($result){
    	header("location:home.php");
    } else{
    	echo"Error al eliminar";
    }
}

	$sql = "SELECT * FROM users WHERE id='$idusuario'"; //el idusuario es para comprobar si existe uno en la tabla
	
	 $result = mysqli_query($conn, $sql);  //se hace la consulta
	 $result1 =mysqli_num_rows($result); //nos devuelve una cantidad de filas

	 if($result1>0){ //validamos si nos ha dado esa cantidad de filas
	 	while ($data = mysqli_fetch_array($result)) { //devuelve el resultado de las tablas en array para que podamos trabajar con los datos
	 		$nombre = $data['username'];
	 	}
	 }else{
	 	header("location: home.php");
	 }
	}
	?>

	<!DOCTYPE html>
	<html>
	<head>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<meta charset="utf-8">
		<style type="text/css">
			body{
				background-color:#001a33;
			}
			span{
				color:red;
			}
		</style>
		<title>Eliminar un usuario</title>
	</head>
	<body>
		<div class="container" style="background-color: #F5F5F5;text-align:center;">
			<div class="row">
				<div class="col-12 mt-4">
					<h2>Estas seguro de eliminar el siguiente usuario "<span><?php echo $nombre;?></span>"?</h2>
					<div class="row">
						<div class="col-12 mt-4">
							<form method="POST" action="">
								<!-- esto es para pillar el id del usuario cunado le demos a aceptar-->
								<input type="hidden" name="idusuario" value="<?php echo $idusuario?>">
								<input type="submit" name="Aceptar" class="btn btn-primary" value="Aceptar">
								<a href="home.php" class="btn btn-danger">Cancelar</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</body>
		</html>
