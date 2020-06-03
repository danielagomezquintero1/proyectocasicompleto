<?php
session_start();
include 'conexion.php';
?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>xd</title>
  <script type="text/javascript">
$(document).ready(function() {

    $(".enviar-btn").keypress(function(event) {

      if ( event.which == 13 ) {

        var getpID =  $(this).parent().attr('id').replace('record-','');

        var usuario = $("input#usuario").val();
        var comentario = $("#comentario-"+getpID).val();
        var publicacion = getpID;
        var now = new Date();
        var date_show = now.getDate() + '-' + now.getMonth() + '-' + now.getFullYear() + ' ' + now.getHours() + ':' + + now.getMinutes() + ':' + + now.getSeconds();

        if (comentario == '') {
            alert('Debes añadir un comentario');
            return false;
        }

        var dataString = 'usuario=' + usuario + '&comentario=' + comentario + '&publicacion=' + publicacion;

        $.ajax({
                type: "POST",
                url: "agregarcomentarios.php",
                data: dataString,
                success: function() {
                    $('#nuevocomentario'+getpID).append('<div class="box-comment"><div class="comment-text"><span class="username"> '+ usuario +'<span class="text-muted pull-right">' + date_show + '</span></span>' + comentario + '</div></div>');
                }
        });
        return false;
      }
    });

});
</script>
</head>
<body>

<?php
$CantidadMostrar=5;
     // Validado  la variable GET
    $compag         =(int)(!isset($_GET['pag'])) ? 1 : $_GET['pag']; 
  $TotalReg       =$conn->query("SELECT * FROM publicaciones");
  $totalr = mysqli_num_rows($TotalReg);
  //Se divide la cantidad de registro de la BD con la cantidad a mostrar 
  $TotalRegistro  =ceil($totalr/$CantidadMostrar);
   //Operacion matematica para mostrar los siquientes datos.
  $IncrimentNum =(($compag +1)<=$TotalRegistro)?($compag +1):0;
  //Consulta SQL
  $consultavistas ="SELECT *
        FROM
        publicaciones
        ORDER BY
        id DESC LIMIT ".(($compag-1)*$CantidadMostrar)." , ".$CantidadMostrar;
  $consulta=$conn->query($consultavistas);
  while ($lista=mysqli_fetch_array($consulta)) {

  

    $usuariob = $conn->query("SELECT * FROM users WHERE id = '".$lista['id']."'");
    $use = mysqli_fetch_array($usuariob);


  ?>
  <!-- START PUBLICACIONES -->
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="avatars/<?php echo $use['avatar']; ?>" alt="User Image">
                <span class="description" onclick="location.href='perfil.php?id=<?php echo $use['id'];?>';" style="cursor:pointer; color: #3C8DBC;"">usuario
                <span class="description"><?php echo $lista['fecha'];?></span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
              <p><?php echo $lista['ubicacion'];?></p>

              <?php 
              if($lista['descripcion'] != 0)
              {
              ?>
              <p>No hay foto</p>
              <?php
              }
              ?>

              <br><br>
              <?php 
              $numcomen = mysqli_num_rows($conn->query("SELECT * FROM comentarios WHERE publicacion = '".$lista['id']."'"));
              ?>
              <!-- Social sharing buttons -->
            <ul class="list-inline">




                    <li class="pull-right">
                      <span href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comentarios
                        (<?php echo $numcomen; ?>)</span></li>
                  </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">

            <?php 
            $comentarios = $conn->query("SELECT * FROM comentarios WHERE publicacion = '".$lista['id']."' ORDER BY id desc LIMIT 2");
            while($com=mysqli_fetch_array($comentarios)){
              $usuarioc = $conn->query("SELECT * FROM users WHERE id = '".$com['usuario']."'");
              $usec = mysqli_fetch_array($usuarioc);
              ?>


              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="avatars/<?php echo $usec['avatar'];?>">

                <div class="comment-text">
                      <span class="username">
                       <p>nombre usuario</p>
                        <span class="text-muted pull-right"><?php echo $com['fecha'];?></span>
                      </span><!-- /.username -->
                  <?php echo $com['comentario'];?>
                </div>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
              <?php } ?>

              <?php if ($numcomen > 2) { ?> 
              <br>
                <center><span onclick="location.href='publicacion.php?id=<?php echo $lista['id'];?>';" style="cursor:pointer; color: #3C8DBC;">Ver todos los comentarios</span></center>
              <?php } ?>

              <div id="nuevocomentario<?php  echo $lista['id'];?>"></div>
              <br>
                <form method="post" action="">
                <label id="record-<?php  echo $lista['id'];?>">
                <input type="text" class="enviar-btn form-control input-sm" style="width: 800px;" placeholder="Escribe un comentario" name="comentario" id="comentario-<?php  echo $lista['id'];?>">
                <input type="hidden" name="usuario" value="5" id="usuario">
                <input type="hidden" name="publicacion" value="<?php echo $lista['id'];?>" id="publicacion">
              
                <input type="hidden" name="nombre" value="ella" id="nombre">
                </form>

              </div>

        </div>
        <!-- /.col -->
        <!-- END PUBLICACIONES -->
    
    <br><br>

  <?php
  }
  //Validmos el incrementador par que no genere error
  //de consulta.  
    if($IncrimentNum<=0){}else {
  echo "<a href=\"publicaciones.php?pag=".$IncrimentNum."\">Seguiente</a>";
  }
?>


</body>
</html>
   
