<?php
session_start();

 if(!isset($_SESSION['userlogin'])){
echo "registrate";


?>
 <html lang="es">
        <head>
         <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
         <!-- Required meta tags -->
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


         <link href="https://fonts.googleapis.com/css?family=Courgette|Lato|Pompiere&display=swap" rel="stylesheet">  

         <title>Página normal</title>

         <style type="text/css">
          .bs-example{
            font-family: sans-serif;
            position: relative;
            margin: 50px;
          }
          .typeahead, .tt-query, .tt-hint {
            border: 2px solid #CCCCCC;
            border-radius: 8px;
            font-size: 24px;
            height: 30px;
            line-height: 30px;
            outline: medium none;
            padding: 8px 12px;
            width: 396px;
          }
          .typeahead {
            background-color: #FFFFFF;
          }
          .typeahead:focus {
            border: 2px solid #0097CF;
          }
          .tt-query {
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
          }
          .tt-hint {
            color: #999999;
          }
          .tt-dropdown-menu {
            background-color: #FFFFFF;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            margin-top: 12px;
            padding: 8px 0;
            width: 422px;
          }
          .tt-suggestion {
            font-size: 24px;
            line-height: 24px;
            padding: 3px 20px;
          }
          .tt-suggestion.tt-is-under-cursor {
            background-color: #0097CF;
            color: #FFFFFF;
          }
          .tt-suggestion p {
            margin: 0;
          }
          .image {
            display:inline-block;
            margin:6%;
            width:80%;
            max-width:100%;
          }
          body{
            background-color: #F5F5F5;
          }
          *{
            text-align: center;
          }
          a, h1, button{
           font-family: 'Lato', sans-serif;
         }
       </style>
     </head>
     <body>

      <link rel="icon" type="image/png" href="images/hmm.png" /> 

      <div class="container-fluid">
        <div class="row">
          <div class="col-12"> <!--con sticky top no se puede poner un modal-->

            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; padding-left:20%; padding-right: 20%;">
              <a class="navbar-brand" href="#">
                <img src="images/hmm.png" style="width:70px">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <label style="color:white; font-size:35px; font-family: 'Courgette', cursive;">UploadIt</label>
                  </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" style="margin-top:25% " href="#" data-toggle="modal" data-target="#exampleModal">Regístrate <span class="sr-only">(current)</span></a>
                  </li>

                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Registrate</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                         <form id="registroform" method="post">
                          <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="username1" id="username1">

                          </div>
                          <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" class="form-control" name="lastname"id="lastname">
                          </div>
                          <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email"id="email">
                            <small class="form-text text-muted">Este sera tu nombre de usuario</small>
                          </div>
                          <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="password1"id="password1">
                            <small class="form-text text-muted">Procura no olvidar tu contraseña</small>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <input type="submit" class="btn btn-primary" name="loginBtn" id="loginBtn" value="Registrarse" />
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal1"style="margin-top:22.5%">Inicia Sesión</a>
                </li>
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Inicia Sesion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form id="loginform" method="post">
                          <div class="form-group">
                            <label>Nombre de usuario</label>
                            <input type="text" class="form-control" id="username" name="username"aria-describedby="usuario">
                            <small id="emailHelp" class="form-text text-muted">Tu nombre de usuario es el email</small>
                          </div>
                          <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="password"id="password">
                          </div>


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <input type="submit" class="btn btn-primary"name="loginBtn" id="loginBtn" value="Login" />
                        </form>
                      </div>
                    </div>
                  </div>
                </div>


                <li class="nav-item">
                  <a class="nav-link" href="perfil1.php"> |
                    <img src="images/icono.png" style="width:70px">
                    Perfil
                  </a>
                </li>

              </ul>
            </div>
          </nav>
        </div>  

      </div>
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/carru.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/carru.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/carru.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <div class="container-fluid" style="width:80%;">
        <div class="row"  style="margin-top:7%;">
          <div class="col-7">
            <div class="row">
              <div class="col-12">
                <h1><strong>¿Qué canción te apetece escuchar?</strong></h1></div>
                <form class="form-inline my-2 my-lg-0" action="google.com" style="display: inline-block; margin:0 auto;">
                 <div class="panel panel-default">
                  <div class="bs-example">

                    <input type="text" name="typeahead" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Busca una canción">
                  </div>
                </div>
                <button class="btn btn-outline-dark my-5 my-sm-0" type="submit" style="height: 50%;">Buscar</button> 
              </form>
              <section class="col-12" style="margin-top:7%; margin-bottom: 3%;">
                <h1><strong>Las mejores canciones del momento</strong></h1></div>
                <div class="row" style="margin-top:4%;">
                  <div class="col-4">              
                    <img src="https://pbs.twimg.com/media/Csao6PdWEAUKb1v.jpg" class="image">
                    <p><strong>Stupid Love</strong></p>
                    <p>Lady Gaga</p>
                    <button onclick="window.location.href='perfilmusica.php'">Reproducir</button>
                  </div>
                  <div class="col-4">
                    <img src="https://www.clashmusic.com/sites/default/files/styles/article_feature/public/field/image/Bad-Bunny-YHLQMDLG-Album-2020.jpg?itok=tbZNj82L" class="image img-circle">
                    <p><strong>Esta cabrón ser yo</strong></p>
                    <p>Bad Bunny</p>
                    <button onclick="window.location.href='perfilmusica.php'">Reproducir</button>
                  </div>
                  <div class="col-4">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/415HDAPiyzL._SX342_QL70_ML2_.jpg" class="image">
                    <p><strong>Cama vacía</strong> </p>
                    <p>Ozuna</p>
                    <button onclick="window.location.href='perfilmusica.php'">Reproducir</button>
                  </div>
                </div>
                <div class="row" style="margin-top:9%;">
                  <div class="col-4">              
                    <img src="http://cdn1.ipauta.com/wp-content/uploads/2018/05/Jhay-Cortez-Eyez-On-Me.jpg" class="image">
                    <p><strong>Costear</strong></p>
                    <p>Jhay Cortez</p>
                    <button onclick="window.location.href='perfilmusica.php'">Reproducir</button>
                  </div>
                  <div class="col-4">
                    <img src="https://assets.audiomack.com/super-daniel/toda-full-remix-prod-by-daniel-275-275-1545603710.jpg" class="image img-circle">
                    <p><strong>Toda</strong></p>
                    <p>Raw Alejandro</p>
                    <button onclick="window.location.href='perfilmusica.php'">Reproducir</button>
                  </div>
                  <div class="col-4">
                    <img src="http://direct.rhapsody.com/imageserver/images/Alb.156054685/500x500.jpg" class="image">
                    <p><strong>Ay vamos</strong> </p>
                    <p>J Balvin</p>
                    <button onclick="window.location.href='perfilmusica.php'">Reproducir</button>
                  </div>
                </div>
              </section>
            </div>
            <div class="col-5">
              <div class="row">
                <div class="col-12"  style="margin-top:10%;" >
                  <p style="font-size:35px;font-family: 'Courgette', cursive;">Sube tu primera canción aquí</p>
                  <button type="button" class="btn btn-info btn-circle btn-lg"><span style="font-size: 25px">Subir</span></button>
                </div>
                <div class="col-12" style="margin-top:14%; ">
                  <h1><strong>Sé como uno de ellos</strong></h1></div>
                  <div class="row">
                    <div class="col-12 mt-5">              
                      <img src="https://www.interviewmagazine.com/wp-content/uploads/2019/05/Interview_2019_Web_Summer_BadBunny-05.jpg" class="image" style="border-radius: 50%; width:25%;">
                      <span><strong>Bad Bunny</strong></span>

                    </div>
                    <div class="col-12">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Lady_Gaga_SAG_2019.jpg" class="image img-circle" style="border-radius: 50%; width:25%;">
                      <span><strong>Lady Gaga</strong></span>
                    </div>
                    <div class="col-12">
                      <img src="https://i0.wp.com/instyle.mx/wp-content/uploads/2019/10/bruno-mars.jpg?fit=1024%2C1024&ssl=1" class="image" style="border-radius: 50%; width:25%;">
                      <span><strong>Bruno Mars</strong></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="row" style="margin-top: 4%; background-color: black; height:300px;">
            <div class="col-6" style="margin-top: 3%;">
              <img src="images/hmm.png" style="width:80px; display: inline-block;">
              <label style="color:white; font-size:35px;font-family: 'Courgette', cursive;">UploadIt</label>
            </div>
            <div class="col-6" style="margin-top: 3%;">
             <p class="text-white">Contacta con nosotros</p>
             <p><a class="text-white">Twitter</a></p>
             <p><a class="text-white">Facebook</a></p>
             <p><a class="text-white">Instagram</a></p>

           </div><?php
 }







//USUARIO ADMIN

  elseif($_SESSION['userlogin'] == 'demo'){
echo "Bienvenido admin ";
echo $_SESSION['userlogin'];

 //ahora ya no es $_session... = $user, si no al reves para poder guardarla en una var
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

<!doctype html>
<html lang="es">
<head>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


 <link href="https://fonts.googleapis.com/css?family=Courgette|Lato|Pompiere&display=swap" rel="stylesheet">  

 <title><?php echo $_SESSION['verified'] ?></title>


 <style type="text/css">

  .bs-example{
   font-family: sans-serif;
   position: relative;
   margin: 50px;
 }
 .typeahead, .tt-query, .tt-hint {
   border: 2px solid #CCCCCC;
   border-radius: 8px;
   font-size: 24px;
   height: 30px;
   line-height: 30px;
   outline: medium none;
   padding: 8px 12px;
   width: 396px;
 }
 .typeahead {
   background-color: #FFFFFF;
 }
 .typeahead:focus {
   border: 2px solid #0097CF;
 }
 .tt-query {
   box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
 }
 .tt-hint {
   color: #999999;
 }
 .tt-dropdown-menu {
   background-color: #FFFFFF;
   border: 1px solid rgba(0, 0, 0, 0.2);
   border-radius: 8px;
   box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
   margin-top: 12px;
   padding: 8px 0;
   width: 422px;
 }
 .tt-suggestion {
   font-size: 24px;
   line-height: 24px;
   padding: 3px 20px;
 }
 .tt-suggestion.tt-is-under-cursor {
   background-color: #0097CF;
   color: #FFFFFF;
 }
 .tt-suggestion p {
   margin: 0;
 }

 .image {
  display:inline-block;
  margin:6%;
  width:80%;
  max-width:100%;
}
body{
  background-color: #F5F5F5;
}
*{
  text-align: center;
}
a, h1, button{
 font-family: 'Lato', sans-serif;
}
</style>
</head>
<body>

  <link rel="icon" type="image/png" href="images/hmm.png" /> 

  <div class="container-fluid">
    <div class="row">
      <div class="col-12"> <!--con sticky top no se puede poner un modal-->

        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; padding-left:20%; padding-right: 20%;">
          <a class="navbar-brand" href="#">
            <img src="images/hmm.png" style="width:70px">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <label style="color:white; font-size:35px; font-family: 'Courgette', cursive;">UploadIt</label>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" style="margin-top:25% " href="logout.php">Cerrar Sesión <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="perfil1.php"> |
                  <?php
                  $sql2 = "SELECT * FROM imagenes WHERE nombreusuario='$user'";
                  $result2=$conn->query($sql2);
                  if ($result2->num_rows > 0) {
                    while($row = $result2->fetch_assoc()) {

                      echo "<img id='imaa'  src=".$row["imagen"]." style='width:70px'>";
                    } 
                  } else{
                    echo"";

                  }
                  ?>
                  <?php echo $_SESSION['userlogin']; ?>
                </a>
              </li>

            </ul>
          </div>
        </nav>
      </div>  

    </div>
   
         <?php

 } 
 else {
 	echo "Bienvenido ";
 	echo $_SESSION['userlogin'];

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

<!doctype html>
<html lang="es">
<head>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


 <link href="https://fonts.googleapis.com/css?family=Courgette|Lato|Pompiere&display=swap" rel="stylesheet">  

 <title><?php echo $_SESSION['verified'] ?></title>


 <style type="text/css">

  .bs-example{
   font-family: sans-serif;
   position: relative;
   margin: 50px;
 }
 .typeahead, .tt-query, .tt-hint {
   border: 2px solid #CCCCCC;
   border-radius: 8px;
   font-size: 24px;
   height: 30px;
   line-height: 30px;
   outline: medium none;
   padding: 8px 12px;
   width: 396px;
 }
 .typeahead {
   background-color: #FFFFFF;
 }
 .typeahead:focus {
   border: 2px solid #0097CF;
 }
 .tt-query {
   box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
 }
 .tt-hint {
   color: #999999;
 }
 .tt-dropdown-menu {
   background-color: #FFFFFF;
   border: 1px solid rgba(0, 0, 0, 0.2);
   border-radius: 8px;
   box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
   margin-top: 12px;
   padding: 8px 0;
   width: 422px;
 }
 .tt-suggestion {
   font-size: 24px;
   line-height: 24px;
   padding: 3px 20px;
 }
 .tt-suggestion.tt-is-under-cursor {
   background-color: #0097CF;
   color: #FFFFFF;
 }
 .tt-suggestion p {
   margin: 0;
 }




 .image {
  display:inline-block;
  margin:6%;
  width:80%;
  max-width:100%;
}
body{
  background-color: #F5F5F5;
}
*{
  text-align: center;
}
a, h1, button{
 font-family: 'Lato', sans-serif;
}
</style>
</head>
<body>

  <link rel="icon" type="image/png" href="images/hmm.png" /> 

  <div class="container-fluid">
    <div class="row">
      <div class="col-12"> <!--con sticky top no se puede poner un modal-->

        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; padding-left:20%; padding-right: 20%;">
          <a class="navbar-brand" href="#">
            <img src="images/hmm.png" style="width:70px">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <label style="color:white; font-size:35px; font-family: 'Courgette', cursive;">UploadIt</label>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" style="margin-top:25% " href="logout.php">Cerrar Sesión <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="perfil1.php"> |
                  <?php
                  $sql2 = "SELECT * FROM imagenes WHERE nombreusuario='$user'";
                  $result2=$conn->query($sql2);
                  if ($result2->num_rows > 0) {
                    while($row = $result2->fetch_assoc()) {

                      echo "<img id='imaa'  src=".$row["imagen"]." style='width:70px'>";
                    } 
                  } else{
                    echo"";

                  }
                  ?>
                  <?php echo $_SESSION['userlogin']; ?>
                </a>
              </li>

            </ul>
          </div>
        </nav>
      </div>  

    </div>
    <div class="row">
      <div class="col-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/carru.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/carru.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/carru.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="container-fluid" style="width:80%;">
      <div class="row"  style="margin-top:7%;">
        <div class="col-7">
          <div class="row">
            <div class="col-12">
              <h1><strong>¿Qué canción te apetece escuchar?</strong></h1></div>
              <form class="form-inline my-2 my-lg-0" action="perfilmusica.php" style="display: inline-block; margin:0 auto;">
               <div class="panel panel-default">
                <div class="bs-example">
                  <input type="text" name="typeahead" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Busca una canción">
                </div>
              </div>
              <button class="btn btn-outline-dark my-5 my-sm-0" type="submit" style="height: 50%;">Buscar</button> 
            </form>
            <section class="col-12" style="margin-top:7%; margin-bottom: 3%;">
              <h1><strong>Las mejores canciones del momento</strong></h1></div>
              <div class="row" style="margin-top:4%;">
                <div class="col-4">              
                  <img src="https://pbs.twimg.com/media/Csao6PdWEAUKb1v.jpg" class="image">
                  <p><strong>Stupid Love</strong></p>
                  <p>Lady Gaga</p>
                  <button onclick="window.location.href='perfilmusica.php'">Reproducir</button>
                </div>
                <div class="col-4">
                  <img src="https://www.clashmusic.com/sites/default/files/styles/article_feature/public/field/image/Bad-Bunny-YHLQMDLG-Album-2020.jpg?itok=tbZNj82L" class="image img-circle">
                  <p><strong>Esta cabrón ser yo</strong></p>
                  <p>Bad Bunny</p>
                  <button onclick="window.location.href='perfilmusica.php'">Reproducir</button>

                </div>
                <div class="col-4">
                  <img src="https://images-na.ssl-images-amazon.com/images/I/415HDAPiyzL._SX342_QL70_ML2_.jpg" class="image">
                  <p><strong>Cama vacía</strong> </p>
                  <p>Ozuna</p>
                  <button onclick="window.location.href='perfilmusica.php'">Reproducir</button>
                </div>
              </div>
              <div class="row" style="margin-top:9%;">
                <div class="col-4">              
                  <img src="http://cdn1.ipauta.com/wp-content/uploads/2018/05/Jhay-Cortez-Eyez-On-Me.jpg" class="image">
                  <p><strong>Costear</strong></p>
                  <p>Jhay Cortez</p>
                  <button onclick="window.location.href='perfilmusica.php'">Reproducir</button>
                </div>
                <div class="col-4">
                  <img src="https://assets.audiomack.com/super-daniel/toda-full-remix-prod-by-daniel-275-275-1545603710.jpg" class="image img-circle">
                  <p><strong>Toda</strong></p>
                  <p>Raw Alejandro</p>
                  <button onclick="window.location.href='perfilmusica.php'">Reproducir</button>
                </div>
                <div class="col-4">
                  <img src="http://direct.rhapsody.com/imageserver/images/Alb.156054685/500x500.jpg" class="image">
                  <p><strong>Ay vamos</strong> </p>
                  <p>J Balvin</p>
                  <button onclick="window.location.href='perfilmusica.php'">Reproducir</button>
                </div>
              </div>
            </section>
          </div>
          <div class="col-5">
            <div class="row">
              <div class="col-12"  style="margin-top:10%;" >
                <p style="font-size:35px;font-family: 'Courgette', cursive;">Sube tu primera canción aquí</p>
                <button type="button" class="btn btn-info btn-circle btn-lg"><span style="font-size: 25px">Subir</span></button>
              </div>
              <div class="col-12" style="margin-top:14%; ">
                <h1><strong>Sé como uno de ellos</strong></h1></div>
                <div class="row">
                  <div class="col-12 mt-5">              
                    <img src="https://www.interviewmagazine.com/wp-content/uploads/2019/05/Interview_2019_Web_Summer_BadBunny-05.jpg" class="image" style="border-radius: 50%; width:25%;">
                    <span><strong>Bad bunny</strong></span>
                  </div>
                  <div class="col-12">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Lady_Gaga_SAG_2019.jpg" class="image img-circle" style="border-radius: 50%; width:25%;">
                    <span><strong>Lady Gaga</strong></span>
                  </div>
                  <div class="col-12">
                    <img src="https://i0.wp.com/instyle.mx/wp-content/uploads/2019/10/bruno-mars.jpg?fit=1024%2C1024&ssl=1" class="image" style="border-radius: 50%; width:25%;">
                    <span><strong>Bruno Mars</strong></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="row" style="margin-top: 4%; background-color: black; height:300px;">
          <div class="col-6" style="margin-top: 3%;">
            <img src="images/hmm.png" style="width:80px; display: inline-block;">
            <label style="color:white; font-size:35px;font-family: 'Courgette', cursive;">UploadIt</label>
          </div>
          <div class="col-6" style="margin-top: 3%;">
           <p class="text-white">Contacta con nosotros</p>
           <p><a class="text-white">Twitter</a></p>
           <p><a class="text-white">Facebook</a></p>
           <p><a class="text-white">Instagram</a></p>
         </div>
<?php } ?>
     <script type="text/javascript">
       $(document).ready(function() {

        $('input.typeahead').typeahead({
          name: 'typeahead',
          remote:'search.php?key=%QUERY',
          limit : 10
        });

        $('#loginform').submit(function(e) {
          e.preventDefault();
          $.ajax({
            type: "POST",
            url: 'login.php',
            data: $(this).serialize(),
            success: function(response)
            {
              var jsonData = JSON.parse(response);

                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                {
                  location.href = "indexofi.php";
                }
                else
                {
                  alert("No ha podido acceder al área privado porque sus credenciales de acceso no son válidas");
                  location.href = "publico.php";
                  exit;
                }
              }
            });
        });

        $('#registroform').submit(function(e) {
          e.preventDefault();
          $.ajax({
            type: "POST",
            url: 'registro.php',
            data: $(this).serialize(),
            success: function(response)
            {
              var jsonData = JSON.parse(response);

                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                {
                 location.href = "perfil1.php";
               }
               else
               {
                alert("No se ha podido registrarse");
                location.href = "publico.php";
                exit;
              }
            }
          });
        });
      });
    </script>
  </body>
  </html>