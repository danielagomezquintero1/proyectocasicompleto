<?php
session_start();

if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "photogram";

  // Create connection
  $mysqli = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

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
            <a class="navbar-brand" href="home.php">
              <img src="images/hmm.png" style="width:70px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <label style="color:white; font-size:35px; font-family: 'Courgette', cursive;">UploadIt</label>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><!--HAY QUE PONER EL REQUIRE DEL NAVBAR, QUE NO SE TE OLVIDE-->
                  <a style="margin-top:25%; color:white;" class="mb-3"href="desconectarse.php">Cerrar Sesión</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#"> |
                    <?php
                    $sql =$mysqli->query("SELECT * FROM users WHERE username='$user'");
                    $result=$sql->fetch_array();

                    $sql2 =$mysqli->query("SELECT * FROM publicaciones WHERE user='".$result['id']."'");
                    $result2=$sql2->num_rows;

                    //mostrar seguidores

                    $sql3 =$mysqli->query("SELECT * FROM seguidores WHERE seguido='".$result['id']."'");
                    $result3=$sql3->num_rows;

                    $sql4 =$mysqli->query("SELECT * FROM seguidores WHERE seguidor='".$result['id']."'");
                    $result4=$sql4->num_rows;

                    echo "<img id='imaa'  src=".$result["avatar"]." style='width:60px'>";
                    
                    ?>
                    <?php echo "<label style='color:white;'>".$user."</label>"; ?>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row mt-5">
        <!--usuario-->
        <div class="col-12"style="background-color: white;">
          <div class="row">
            <div class="col-2 mt-4">
              <?php echo"<img src=".$result["avatar"]." style='width:170px'>"; ?>
            </div>


            <div class="col-5 mt-3">
              <div class="row">
                <div class="col-12">
                  <p style="font-size: 40px;"><?php echo $result["username"]; ?></p>
                </div>

                <div class="col-12">
                  <div class="row">
                    <div class="col-3">
                      <small><span><?php echo $result3 ?> </span>Seguidores</small>
                    </div>
                    <div class="col-9">
                     <small><span><?php echo $result4 ?>  </span>Seguidos</small>
                   </div>
                 </div>
               </div>

               <div class="col-12">
                 <div class="row mt-3">
                   <div class="col-12">
                     <?php echo $result["email"]; ?>
                   </div>
                   <div class="col-12">
                     <?php echo $result["bio"]; ?>
                   </div>
                   <div class="col-12 mb-5">
                     <?php echo $result["birthday"]; ?>
                   </div>

                 </div>
               </div>
             </div>
           </div>
           <div class="col-5" style="text-align: center; margin-top:9%;">
            <a class="btn btn-outline-primary" href="subirpost.php" role="button">Sube un post</a>
          </div>
        </div>
      </div>
    </div>
    <!--segundo div-->
    <div class="row mt-5">
      <div class="col-12 p-3 m-2" style="background-color: white;">
        <h4>Numero de posts: <?php echo $result2; ?><br></h4>
        <!--mostramos las publicaciones-->


        <!--latabla ARCHIVOS NO SIRVE............... MOSTRAR CONTENIDO COMO EN LA PAGINA HOME-->



        <?php
        while($publicaciones = $sql2->fetch_array()) {
          $sql4 = $mysqli->query("SELECT * FROM archivos WHERE publicacion ='".$publicaciones['id']."'");
          $result4 = $sql4->fetch_array();
          ?>
          <img class="m-3 view_data"name="view" value="view" id="<?php echo $result['id']; ?>" data-target="#publiuser <?php echo $result['id']; ?>"data-toggle="modal" style="width:29%"src='archivos/<?php echo $result4['ruta']; ?>');>
          <!-- Modal -->
          <div id="publiuser <?php echo $result['id']; ?>" class="modal fade">  
            <div class="modal-dialog">  
             <div class="modal-content">  
              <div class="modal-header">  
               <button type="button" class="close" data-dismiss="modal">&times;</button>  
               <h4 class="modal-title">Detalles de la imagen seleccasdionada</h4>  
             </div>  
             <div class="modal-body" id="employee_detail">  
             </div>  
             <div class="modal-footer">  
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
             </div>  
           </div>  
         </div>  
       </div> 


     <?php }  ?>

   </div>

   <!-- Modal -->



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

     // $('.view_data').click(function(){  no funciona
      // var employee_id = $(this).attr("id");  
      // $.ajax({  
      //  url:"select.php",  
      //  method:"post",  
      //  data:{employee_id:employee_id},  
      //  success:function(data){  
       //  $('#employee_detail').html(data);  
        // $('#dataModal').modal("show");  
      // }  
     //});  
     //});  
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

