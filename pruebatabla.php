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
    </style>
  </head>
  <body>

    <link rel="icon" type="image/png" href="images/hmm.png" /> 



      <!--menu de personas-->
      <div class="container">
        <div class="row">
          <div class="col-12 m-5" style="font-weight: bold;color:white;">
            <h3><i><u>Usuarios registrados</u></i></h3>
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
        <div class="row">
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
              echo "<td class='usernamee'>".$fila['username']."</td>";
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

                        <input type="text" hidden="" id="idpersona" name="">
                        <label>Nombre: </label>
                        <input type="text" name="" id="nombreu" class="form-control input-sm">


                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Actualizar datos</button>
                      </div>
                    </div>
                  </div>
                </div>
              </table>
            </div>

          </div>
<div id="tabla"></div>
        </div>
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

    function actualizaDatos(){ 
      id = $('#idpersonau').val();
      nombre = $('#nombreu').val();
      cadena = "id="+ id +
      "&username=" + username;


}
    


   $(document).ready(function() {
        $('#actualizaDatos').click(function(){
          actualizaDatos();
        }