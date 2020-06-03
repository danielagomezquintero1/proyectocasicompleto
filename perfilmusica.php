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
    <link href="styles/buttons.css" rel="stylesheet">
    <link href="styles/style..css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Courgette|Lato|Pompiere&display=swap" rel="stylesheet">  

    <title>Página principal</title>

    <style type="text/css"> 

      span{ 
        color:blue; }
        #form {
          width: 250px;
          margin: 0 auto;
          height: 50px;
        }

        #form p {
          text-align: center;
        }

        #form label {
          font-size: 20px;
        }

        input[type="radio"] {
          display: none;
        }

        label {
          color: grey;
        }

        .clasificacion {
          direction: rtl;
          unicode-bidi: bidi-override;
        }

        label:hover,
        label:hover ~ label {
          color: blue;
        }

        input[type="radio"]:checked ~ label {
          color: blue;
        }

        fieldset.scheduler-border {
          border: 1px groove #ddd !important;
          padding: 0 1.4em 1.4em 1.4em !important;
          margin: 0 0 1.5em 0 !important;
          -webkit-box-shadow:  0px 0px 0px 0px #000;
          box-shadow:  0px 0px 0px 0px #000;
        }

        legend.scheduler-border {
          font-size: 1.2em !important;
          font-weight: bold !important;
          text-align: left !important;
          width:auto;
          padding:0 10px;
          border-bottom:none;
        }
        #imaa{
          display: inline-block;
          width:200px;

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

        a, h1, button{
         font-family: 'Lato', sans-serif;
       }
     </style>
   </head>
   <body>

    <link rel="icon" type="image/png" href="images/hmm.png" /> 
    <div class="container-fluid" style="background-color:#001a33">
      <div class="row">
        <div class="col-12 "> <!--con sticky top no se puede poner un modal-->
          <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; padding-left:20%; padding-right: 20%;">
            <a class="navbar-brand" href="indexofi.php">
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
                  <a class="nav-link" href="#"> |
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
                    Bienvenido <?php echo $_SESSION['userlogin']; ?>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-3" style="width:74%" >
      <div class="row" style="background-color:#f2f2f2">
        <div class="col-8" style="text-align:center">
          <div class="row">
            <div class="col-11 border border-dark p-3 mt-5" style="margin:0 auto;"><h4>Descripción de la canción "Yo perreo sola"</h4></div>
            <div class="col-12">
              <div class="row">
                <div class="col-5 p-5"> 
                  <h5>Foto del cantante</h5>
                  <img src="https://i.pinimg.com/originals/af/b3/d1/afb3d190de0f410dac30a4d27ff56e1d.jpg" style="width: 80%"></div>
                  <div class="col-7 p-5">
                    <h4 class="mb-5">Información del artista</h4>
                    <p>Benito Antonio Martínez Ocasio, known by his stage name Bad Bunny, is a Puerto Rican singer and rapper. His music is often defined as Latin trap and reggaeton, but he has incorporated various other genres into his music, including rock, bachata, and soul.</p>
                  </div>  
                </div>
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-5 p-5">
                    <h5>Portada de la canción</h5>
                    <img src="https://www.lahiguera.net/musicalia/artistas/varios/disco/0/tema/19416/esta_rico-portada.jpg" style="width: 80%">
                  </div>
                  <div class="col-7 p-5 mt-5">
                    <h5>Reproducir canción</h5>
                    <audio src="http://bsrmp3.online/mp3s/Bad%20Bunny%20-%20Esta%20Cabron%20Ser%20Yo.mp3" controls="controls" type="audio/mpeg" preload="preload">
                    </audio>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-5 mb-5">
                <h5>Videoclip</h5>
                <video width="700" height="500" controls>
                  <source src="wow.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                      Tu navegador no lo permite
                    </video>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="row" style="margin-top: 20%;">
                  <div class="col-6 mt-5" style="margin:0 auto;">
                    <button type="button" class="btn btn-primary btn-lg">DONAR <img src="img/compra.png" style="width: 15%"></button>    
                  </div>
                  <div class="col-12" style="margin-top: 20%;text-align:Center">
                    <h5>Deja tu puntuación aquí</h5>
                    <form>
                      <p class="clasificacion">
                        <input id="radio1" type="radio" name="estrellas" value="5">
                        <label for="radio1" style="font-size:60px">★</label>
                        <input id="radio2" type="radio" name="estrellas" value="4">
                        <label for="radio2" style="font-size:60px">★</label>
                        <input id="radio3" type="radio" name="estrellas" value="3">
                        <label for="radio3" style="font-size:60px">★</label>
                        <input id="radio4" type="radio" name="estrellas" value="2">
                        <label for="radio4" style="font-size:60px">★</label>
                        <input id="radio5" type="radio" name="estrellas" value="1">
                        <label for="radio5" style="font-size:60px">★</label>
                      </p>
                    </form>
                    <div class="col-12" id="gracias"></div>
                    <small id="likee"></small>
                  </div> <!------ -->
                  <div class="col-12" style="margin-top: 10%;">
                    <h5 class="mt-5 mb-3">Comentarios</h5>
                    <form method="post" id="loginform">

                      <div class="input-group mb-3">
                        <?php
                        $sql2 = "SELECT * FROM imagenes WHERE nombreusuario='$user'";
                        $result2=$conn->query($sql2);
                        if ($result2->num_rows > 0) {
                          while($row = $result2->fetch_assoc()) {

                            echo "<img id='imaa' style='width:10%' class='mr-2' src=".$row["imagen"].">";
                          } 
                        } else{
                          echo"";

                        }
                        ?>
                        
                        <input type="text" class="form-control mr-2" id="limpia"placeholder="Escribe aquí tu comentario..." aria-label="Escribe aquí tu comentario..." id="texto" name="texto" aria-describedby="basic-addon1">
                        <button type="submit" id="enviaa">Enviar</button>
                      </div>

                    </form>
                    <section>
                      <div id="chatdiv"></div>
                    </section>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>

<!--
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
    -->
  </body>
  <script type="text/javascript">

    function limpiar(){
      $("#enviaa").click(function(){
        $("#limpia").html("");
      });
    }
    var i = 0;
    function gracias(){
      $("label").click(function(){
        i++;
        $("#gracias").html("Gracias por puntuar!");
        $("#likee").html(i+" likes");

      });

    }
    function modificar(){
      $("#modificar").click(function(){
        $("#modificardatos").show();
      });

    } 
    $(document).ready(function() {
      gracias();
      modificar();  
      limpiar();    
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

