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

   <title>Página principal</title>

   <style type="text/css">
    #imaa{
      display: inline-block;
      width:15%;
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
              <a class="nav-link" href="#"> |
                <?php
                $sql2 = "SELECT * FROM imagenes WHERE nombreusuario='$user'";
                $result2=$conn->query($sql2);
                if ($result2->num_rows > 0) {
                  while($row = $result2->fetch_assoc()) {

                    echo "<img id='imaa' src=".$row["imagen"]." style='width:70px'>";
                  } 
                } else{
                  echo"";

                }
                ?>
                Bienvenido <?php echo $_SESSION['userlogin']; ?>
              </a>
            </li>

          </ul>
        </div>
      </nav>

      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-4">
              <div id="ima"> </div> <!--se muestra aqui la imagen-->
              <?php
              $sql2 = "SELECT * FROM imagenes WHERE nombreusuario='$user'";
              $result2=$conn->query($sql2);
              if ($result2->num_rows > 0) {
                while($row = $result2->fetch_assoc()) {

                  echo "<br><img id='imaa' src=".$row["imagen"]."></li></ul>";
                } 
              } else{
                echo"";

              }
              ?>
            </div>
            <div class="col-4">
              <?php echo $_SESSION['userlogin']; 

              if ($result->num_rows == 1) {
                while($row = $result->fetch_assoc()) {
                  echo "<ul><li>nombre:".$row["firstname"]. ".</li> " ."<br><li>apellidos: ". $row["lastname"].".</li><br><li>email: ".$row["email"].".</li><br>"; 
                } 
              }else {
                echo "0 results";
              }
              ?>
            </div>
            <div class="col-4">

            </div>
          </div>
        </div>
      </div>  
    </div>


    <br>Bienvenido al área privado.
    <a href="logout.php">Cerrar Sesión</a>
    <fieldset>
      <legend>Datos</legend>
      <h4>Tus datos son</h4>



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
  ?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">

</script>
</body>
</html>