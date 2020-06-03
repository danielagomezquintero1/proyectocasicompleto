<?php
session_start();

if(!isset($_SESSION['userlogin'])){  //USER NO REGISTRADO




//DEPENDIEDNO DE QUE USUARIO ESTA LOGEANDOSE, LA PAGINA CAMBIA



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



   .demo a {
    position: absolute;
    bottom: 20px;
    left: 90%;
    z-index: 2;
    display: inline-block;
    -webkit-transform: translate(0, -50%);
    transform: translate(0, -50%);
    color: #fff;
    font : normal 400 20px/1 'Josefin Sans', sans-serif;
    letter-spacing: .1em;
    text-decoration: none;
    transition: opacity .3s;
  }
  .demo a:hover {
    opacity: .5;
  }



  #section02 a {
    padding-top: 65px;
  }
  #section02 a span {
    position: absolute;
    top: 0;
    left: 50%;
    width: 110px;
    height: 110px;
    margin-left: -23px;
    border: 1px solid black;
    border-radius: 100%;
    box-sizing: border-box;
    background-color: #B0E0E6;
  }
  #section02 a span::after {
    position: absolute;
    top: 50%;
    left: 50%;
    content: '';
    width: 16px;
    height: 16px;
    margin: -12px 0 0 -8px;
    border-left: 1px solid black;
    border-bottom: 1px solid black;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    box-sizing: border-box;
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

    <!--SCROLL-->
    <section id="section02" class="demo">
      <a href="#section03"><span></span><br></a>
    </section>

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
          background-color:#001a33;
        }
        *{
          text-align: center;
        }
        a, h1, button{
         font-family: 'Lato', sans-serif;
       }

       table {
        table-layout: fixed;
        width: 100%;
        border-collapse: collapse;
        border: 3px solid purple;
        background-color: #F5F5F5;
      }
      thead th:nth-child(1) {
        width: 30%;
      }

      thead th:nth-child(2) {
        width: 20%;
      }

      thead th:nth-child(3) {
        width: 15%;
      }

      thead th:nth-child(4) {
        width: 35%;
      }

      th, td {
        padding: 10px;
      }
      #editar{
        width: 15%;
      }
      #eliminar{
        width: 15%;
      }

      #subirpng:hover {
        opacity: .5;
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
                    <?php echo "admin ".$_SESSION['userlogin']; ?>
                  </a>
                </li>

              </ul>
            </div>
          </nav>
        </div>  
      </div>

      <!--menu de personas-->
      <div class="container-fluid" style="width:70%;">
        <div class="row">
          <div class="col-12 m-5" style="font-weight: bold;color:white;">
            <h3 id="usu"><i><u>Usuarios registrados</u></i></h3>
            <h3 id="usu2"><i><u>Publicaciones</u></i></h3>
          </div>
          <div class="col-12" id="notificacion"></div>
          <div class="col-3">
            <button type="button" data-toggle="modal" data-target="#agregaModal"style="color:black"class="btn btn-info mb-3"><img style="width:15%;" src="anadir.png"> Agregar un nuevo usuario</button>
          </div>


          <!--modal para agregar un nuevo usuario-->

          <div class="modal fade" id="agregaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <div class="form-group">
                    <form enctype="multipart/form-data" id="nuevousuarioform" method="post">
                      <label for="recipient-name" class="col-form-label"><b>Nombre:</b></label>
                      <input type="text" class="form-control" id="nombrea" name="nombrea">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Email:</b></label>
                      <input type="text" class="form-control" id="emaila" name="emaila">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Contraseña:</b></label>
                      <input type="password" class="form-control" id="contrasenaa" name="contrasenaa">
                    </div>
                    <b>Subir imagen de perfil</b> 
                    <label for="file-input">
                      <img class="mt-2"src="subir.png" id="subirpng" width="10%;">
                    </label>
                    <input id="file-input" type="file" name="file-input"  hidden="" />
                    <div class="col-12 m-3">
                      <div id="resultado" class=""><img id="imgSalida" width="300" /></div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <input type="submit" name="subir" class="btn btn-primary" value="Agregar un nuevo usuario">
                  </form>
                </div>
              </div>
            </div>
          </div>



          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "photogram";

  // Create connection
          $conexion = new mysqli($servername, $username, $password, $dbname);
  // Check connection
          if ($conexion->connect_error) {
            die("Connection failed: " . $conexion->connect_error);
          }

          $mostrar = "SELECT * FROM users";
          $resultmostrar = $conexion->query($mostrar);

          ?>

        </div>
        <div class="row" id="info">
          <table>
            <tr>            
              <td><div class="col-12 mb-4" style="font-weight:bold">ID</div></td>
              <td><div class="col-12 mb-4" style="font-weight:bold">Nombre</div></td>
              <td><div class="col-12 mb-4" style="font-weight:bold">Email</div></td>
              <td><div class="col-12 mb-4" style="font-weight:bold">Registro</div></td>
              <td><div class="col-12 mb-4" style="font-weight:bold">Foto de perfil</div></td>
              <td><div class="col-12 mb-4" style="font-weight:bold">Acciones</div></td>
            </tr>
            
            <?php 


            //mostrar todos los campos de users


            $mostrar = "SELECT * FROM users";
            $resultmostrar = $conexion->query($mostrar);
            while($fila=$resultmostrar->fetch_assoc()){
              //datos para mostrar en el formulario de modificar
              $datos = $fila['id']."||".$fila['username']."||".$fila['email'];

              echo "<tr class='".$fila['id']."'>";
              echo "<td>".$fila['id']."</td>";
              echo "<td class='usernamee'><a style='text-decoration:none;color:black;' href='mostrarpublicaciones.php?id=".$fila['id']."'>".$fila['username']."</a></td>";
              echo "<td class='emaill'>".$fila['email']."</td>";
              echo "<td>".$fila['signup_date']."</td>"; //TR CLASS para que cada fila tenga una clase diferente para cambiarla despues con ajax
              echo "<td class='fotoperfill'><img style='width:30%;'src='".$fila['avatar']."'></td>";
              ?>
              <td><a data-toggle='modal' data-target='#modalEdicion' onclick="agregaform('<?php echo $datos?>')" class='btn btn-primary'> <img id='editar' src='editaricon.png'> Modificar</a>
                <?php echo"<a href='eliminar_user.php?id=".$fila['id']."' class='btn btn-danger'><img id='eliminar' src='eliminar.png'> Eliminar </a>
                </td>
                </tr>";}?>
                <!--FILA=ID PARA BORRAR UN USUARIO EN ESPECIFICO-->
                <!-- Modal modificar-->
                <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modificar datos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="post" id="actualizarform">
                          <input type="text" hidden="" id="idpersonau" name="idpersonau"> <!--muestra el id por la var datos-->
                          <label>Nombre: </label>
                          <input type="text" name="nombreu" id="nombreu" class="form-control input-sm">


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Actualizar datos</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </table>
            </div>
            <!--------------------------------->
            <div class="row" id="info2">
              <div class="row" id="info">
          <table>
            <tr>            
              <td><div class="col-12 mb-4" style="font-weight:bold">CANCIÓN</div></td>
              <td><div class="col-12 mb-4" style="font-weight:bold">Usuario</div></td>
              <td><div class="col-12 mb-4" style="font-weight:bold">Título de la cancion</div></td>
              <td><div class="col-12 mb-4" style="font-weight:bold">Fecha de creación</div></td>
              <td><div class="col-12 mb-4" style="font-weight:bold">Likes</div></td>
              <td><div class="col-12 mb-4" style="font-weight:bold">Acciones</div></td>
            </tr>
            
            <?php 


            //mostrar todos los campos de publicaciones


            $mostrar1 = "SELECT * FROM publicaciones";
            $resultmostrar1 = $conexion->query($mostrar1);
            while($fila=$resultmostrar1->fetch_assoc()){
              //datos para mostrar en el formulario de modificar
              $datos1 = $fila['id']; //???? 

              echo "<tr>";
                    echo"<td><audio controls>
      <source src='".$fila['ubicacion']."' type='audio/ogg'>
      <source src='horse.mp3' type='audio/mpeg'>
      Your browser does not support the audio element.
      </audio></td>";   
              //echo "<td><img style='width:60%;'src='ubicacion/".$fila['ubicacion']."'></td>";
              echo "<td>".$fila['user']."</td>";
              echo "<td>".$fila['descripcion']."</td>";
              echo "<td>".$fila['fecha']."</td>";
              echo "<td>".$fila['likes']."</td>";
              ?>
              <td><a data-toggle='modal' data-target='#modalEdicion' onclick="agregaform('<?php echo $datos?>')" class='btn btn-primary'> <img id='editar' src='editaricon.png'> Modificar</a>
                <?php echo"<a href='eliminar_user.php?id=".$fila['id']."' class='btn btn-danger'><img id='eliminar' src='eliminar.png'> Eliminar </a>
                </td>
                </tr>";}?>
                <!--FILA=ID PARA BORRAR UN USUARIO EN ESPECIFICO-->
                <!-- Modal modificar-->
                <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modificar datos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="post" id="actualizarform">
                          <input type="text" hidden="" id="idpersonau" name="idpersonau"> <!--muestra el id por la var datos-->
                          <label>Nombre: </label>
                          <input type="text" name="nombreu" id="nombreu" class="form-control input-sm">


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Actualizar datos</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </table>
            </div>

            </div>



               <!-- segundo section de la pagina-->
               <div class="row">
            <div class="col-3 mt-3 p-2" style="background-color: tomato; color:white; border-radius: 15px;">
              <div class="row">
              <div class="col-4 mt-1"><img src="usuarios.png" style="width:80%;margin-left: 40%;"></div>
              <div class="col-8 mt-2"><h6 id="publi1">Total de usuarios registrados: 
                <?php //mostramos los usuarios totales
                $numusuarios =$conexion->query("SELECT * FROM users");
                $resultadonumusuarios=$numusuarios->num_rows;
                echo $resultadonumusuarios;
                ?>
              </h6></div>
            </div>
          </div>
          <!---------------------------------------------------->
          
            <div class="col-3 ml-2 p-2 mt-3" style="background-color: #778899; color:white; border-radius: 15px;">
            <div class="row">
              <div class="col-4 mt-1"><img src="publicaciones.png" style="width:80%;margin-left: 40%;"></div>
              <div class="col-8 mt-2"><h6 id="publi">Publicaciones totales<br>
                <?php
                $numpublicaciones =$conexion->query("SELECT * FROM publicaciones");
                $resultadopublicaciones=$numpublicaciones->num_rows;
                echo $resultadopublicaciones;
                ?>
              </h6></div>
            </div>
          </div>
          <!--------------------------------------------------------->
                      <div class="col-3 ml-2 p-2 mt-3" style="background-color: #9ACD32; color:white; border-radius: 15px;">
            <div class="row">
              <div class="col-4 mt-1"><img src="comentarios.png" style="width:80%; margin-left: 40%;"></div>
              <div class="col-8 mt-2"><h6>Comentarios totales<br>
                <?php
                $numpublicaciones =$conexion->query("SELECT * FROM publicaciones");
                $resultadopublicaciones=$numpublicaciones->num_rows;
                echo $resultadopublicaciones;
                ?>
              </h6></div>
            </div>
          </div>
          <!----------------------------------------------------------->
            
          </div>
        </div>
</div>

        <?php





//usuario registrado normal




      } 
      else {


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
         <?php }
         ?>
       </footer>
     </div>
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



     <script src="typeahead.min.js"></script>

     <script type="text/javascript">

    function agregaform(datos){ //funcion que cuando le das a modificar envian estos datos al formulario
      //rellenamos el valor del input

      d=datos.split('||'); //convierte en array
      $('#idpersonau').val(d[0]);
      $('#nombreu').val(d[1]);
    }

//-------------------------------
    function ocultarInfo2(){ 

      
       $('#info2').hide();
       $('#usu2').hide();
        
      
    }
    function darclickPublicaciones(){ 

      $("#publi").click(function(){
       $('#info').hide();
       $('#usu').hide();
       $('#usu2').show();
       $('#info2').show();
        });
      
    }

        function darclickUsuarios(){ 

      $("#publi1").click(function(){
       $('#info').show();
       $('#usu').show();
       $('#usu2').hide();
       $('#info2').hide();
        });
      
    }


    $(document).ready(function() {
darclickUsuarios();
darclickPublicaciones();
ocultarInfo2();


//FUNCION PARA SUBIR UNA IMAGEN EN HTML
$(function() {
  $('#file-input').change(function(e) {
    addImage(e); 
  });

  function addImage(e){
    var file = e.target.files[0],
    imageType = /image.*/;

    if (!file.type.match(imageType))
     return;

   var reader = new FileReader();
   reader.onload = fileOnload;
   reader.readAsDataURL(file);
 }

 function fileOnload(e) {
  var result=e.target.result;
  $('#imgSalida').attr("src",result);
}
});

//----
$('input.typeahead').typeahead({
  name: 'typeahead',
  remote:'search.php?key=%QUERY',
  limit : 10
});


$('#actualizarform').submit(function(e) {
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: 'actualizar_datos.php',
    data: $(this).serialize(),
    beforeSend: function(){
      $('#modalEdicion').modal('toggle');
      $('#notificacion').html("<h6 style='background-color:#228B22;padding:1%;width:50%;margin:0 auto;margin-bottom:5%;'>Usuario modificado con éxito</h6>");

      $("#notificacion").fadeOut(5000);


    },
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
                alert("Error al actualizar");
                location.href = "indexofi.php";
                exit;
              }
            }
          });
});


$('#nuevousuarioform').submit(function(e) {
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: 'anadirnuevousuarioadmin.php',
    data:  new FormData(this),
    contentType: false,
    cache: false,
    processData:false,
    success: function(response)
    {
      var jsonData = JSON.parse(response);

                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                {
                  alert("Se ha añadido un nuevo usuario");
                  location.href = "indexofi.php";
                }
                else
                {
                  alert("No se ha añadido un nuevo usuario");
                  location.href = "publico.php";
                  exit;
                }
              }
            });
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