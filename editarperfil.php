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
        background-color: #F5F5F5;
      }

      a, h1, button{
       font-family: 'Lato', sans-serif;
     }
   </style>
 </head>
 <body>

  <link rel="icon" type="image/png" href="images/hmm.png" /> 

  <div class="container-fluid" style="background-color:#001a33


  ">
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
      <div class="container">
        <div class="row mt-5 mb-5 p-5" style="background-color: #f2f2f2

        ">
        <div class="col-3">
          <div id="ima"> </div> <!--se muestra aqui la imagen-->
          <?php
          $sql2 = "SELECT * FROM imagenes WHERE nombreusuario='$user'";
          $result2=$conn->query($sql2);
          if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {

              echo "<img id='imaa' src=".$row["imagen"].">";
            } 
          } else{
            echo"";

          }
          ?>
        </div>

        <div class="col-5">
          <div class="row" style="text-align: left">
            <div class="col-12"><h1><?php echo $user; ?></h1></div>
            
            <?php
            if ($result->num_rows >0) {
              while($row = $result->fetch_assoc()) {
                $firstnamee= $row["firstname"]; 
                $lastnamee= $row["lastname"];
                $emaill = $row["email"];
                $contrasenaa = $row["contrasena"];
              } 
            }else {
              echo "0 results";
            }
            ?>
            <div id="datoss">
            <div class="col-12"><h6>Primer nombre: <?php echo $firstnamee?></h6></div>
            <div class="col-12"><h6>Segundo nombre: <?php echo $lastnamee?></h6></div>
            <div class="col-12"><h6>Email: <?php echo $emaill?></h6></div>
</div>
            
            <div class="col-12 mt-2"><button type="button"  id="modificar" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#exampleModal">Modificar datos</button></div>
          </div>
        </div>

      


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar tu perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="modificardatos" method="post">
          Nuevo nombre: <input type="text" name="nombrenuevo"><br>
          Nuevo apellido: <input type="text" name="apellidonuevo"><br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Modificar</button>

        </form>
                  <form id="uploadForm" action="upload.php" method="post">
            <label class="mt-4 mb-2">Cambia tu imagen de perfil</label><br/>
            <input name="userImage" type="file" class="inputFile" />
            <input type="submit" value="Subir imagen"class=" btn btn-primary btnSubmit mt-3" />
          </form>
      </div>
    </div>
  </div>
</div>

      

        <div class="col-4 mt-5 mb-5">
          <div class="row" style="text-align: center">
           
            <div class="col-12 mt-5"><button type="button" class="btn btn-outline-primary btn-xs">100 seguidores</button></div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

</div>

<footer class="row" style="margin-top: 4%; background-color: black; height:300px;text-align: center">
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

</footer>
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
    function modificar(){
      $("#modificar").click(function(){
        $("#modificardatos").show();
      });

    }
    $(document).ready(function() {
      modificar();      
      $('#modificardatos').submit(function(e) {
        e.preventDefault();
        $.ajax({
          type: "POST",
          url: 'editar.php',
          data: $(this).serialize(),
          success: function(response) {
            alert("Se han modificado los datos");
            $("#datoss").html(response);
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

