 <!--en este fichero he mostrado el contenido por echos.. para asi usar dos tecnicas-->
<nav class="navbar navbar-expand-lg navbar-dark p-3">
  <a class="navbar-brand ml-5" href="home.php">
   <img src="images/hmm.png" style="width:70px">
   <label class="ml-2">Upload It</label>
 </a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">

<!--si eres usuario admin aparece usuario admin, si no aparecera contacata con nosotros e inicio-->
    <?php
    if(!isset($_SESSION['user'])){
  echo"<li class='nav-item'>
      <a class='nav-link' href='home.php'>
        <i class=' lg fa fa-home'> Inicio</i>
        <span class='sr-only'>(current)</span></a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='home.php'>
          <i class=' lg fa fa-phone'> Contacta con nosotros</i>
          <span class='sr-only'>(current)</span></a>
        </li>";
  } elseif($_SESSION['user'] != 'demo'){
    echo"<li class='nav-item'>
      <a class='nav-link' href='home.php'>
        <i class=' lg fa fa-home'> Inicio</i>
        <span class='sr-only'>(current)</span></a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='home.php'>
          <i class=' lg fa fa-phone'> Contacta con nosotros</i>
          <span class='sr-only'>(current)</span></a>
        </li>";
    } else{
      echo"<li class='nav-item'>
        <a class='nav-link' href='home.php'>
          <i class=' lg fa fa-user'> Usuario ADMIN</i>
          <span class='sr-only'>(current)</span></a>
        </li>";
    }
?>

        <!---carrito solo se ve para usuarios registrados normales-->

        <?php
        if(!isset($_SESSION['user'])){
          echo"";
        } elseif($_SESSION['user'] != 'demo'){
          echo"<li class='nav-item  mr-4'>
          <a class='nav-link' href='home.php'>
          <i class='fa fa-shopping-cart'> Carrito</i>
          <span class='sr-only'>(current)</span></a>
          </li>";
        } else{
          echo"";
        }
        ?>

        <!--- registrarse/iniciar sesion para no logeados... para logeados su nombre-->
        <?php
        if(!isset($_SESSION['user'])){
          echo"<li class='nav-item ml-3'>
          <a class='nav-link'  data-toggle='modal' data-target='#exampleModal'>
            <i> Registrate</i>
            <span class='sr-only'>(current)</span></a>
          </li>

          <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
              <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='exampleModalLabel'>Registrate</h5>
                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                <div class='modal-body'>

                 <form id='registroform' method='post'>
                  <div class='form-group'>
                    <label>Nombre de usuario</label>
                    <input type='text' class='form-control' name='username1' id='username1'>
                    <div id='result-username'></div>

                  </div>
                  <div class='form-group'>
                    <label>Nombre</label>
                    <input type='text' class='form-control' name='lastname'id='lastname'>
                    <div id='result-nombre'></div>
                  </div>
                  <div class='form-group'>
                    <label>Email</label>
                    <input type='text' class='form-control' name='email'id='email'>
                    <div id='result-email'></div>

                  </div>
                  <div class='form-group'>
                    <label>Contraseña</label>
                    <input type='password' class='form-control' name='password1'id='password1'>
                    <div id='result-contrasena'></div>
                    <small class='form-text text-muted'>Procura no olvidar tu contraseña</small>
                  </div>
                </div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                  <input type='submit' class='btn btn-primary' name='loginBtn' id='loginBtn' value='Registrarse' />
                </form>
              </div>
            </div>
          </div>
        </div>

        <li class='nav-item mr-5'>
          <a class='nav-link' data-toggle='modal' data-target='#exampleModal1' href='home.php'>
            <i> Inicia Sesion</i>
            <span class='sr-only'>(current)</span></a>
          </li>
          <!-- modal de inicia sesion-->
          <div class='modal fade' id='exampleModal1' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
              <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='exampleModalLabel'>Inicia Sesion</h5>
                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                <div class='modal-body'>
                  <form id='loginform' method='post'>
                    <div class='form-group'>
                      <label>Nombre de usuario</label>
                      <input type='text' class='form-control' id='username' name='username'aria-describedby='usuario'>
                    </div>
                    <div class='form-group'>
                      <label>Contraseña</label>
                      <input type='password' class='form-control' name='password'id='password'>
                    </div>
                  </div>
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                    <input type='submit' class='btn btn-primary'name='loginBtn' id='loginBtn' value='Login' />
                  </form>
                </div>
              </div>
            </div>
          </div>";
        } elseif($_SESSION['user'] != 'demo'){
          echo"<li class='nav-item'>
                <a class='nav-link' href='perfiluser.php?username=".$_SESSION['user']."'>
                  <i class=' lg fa fa-user'> ".$_SESSION['user']."</i>
                    <span class='sr-only'>(current)</span></a>
              </li>

              <li class='nav-item'>
                <a class='nav-link' href='desconectarse.php'>
                  <i> Salir</i>
                    <span class='sr-only'>(current)</span></a>
              </li>";
        } else{
          echo"<li class='nav-item mr-5' >
                <a class='nav-link' href='desconectarse.php'>
                  <i> Salir</i>
                    <span class='sr-only'>(current)</span></a>
              </li>";
        }
        ?>

          <!------->
        </ul>

        <!----- si eres usuario admin aparecera admin y se quitara el buscador----->
          <?php
           if(!isset($_SESSION['user'])){
            echo" <form action='buscar_usuarios.php' method='get' class='form-inline my-2 my-lg-0 mr-5'>
          <div class='md-form active-cyan-2 mb-3'>
            <input class='form-control' type='text' name='busqueda' id='busqueda' placeholder='Busca canciones aquí' aria-label='Search'>
          </div>
          <button class='btn btn-outline-light my-2 my-sm-0' type='submit'>
            <i class='fa fa-search'></i></button>
          </form>";
            } elseif($_SESSION['user'] != 'demo'){
              echo" <form class='form-inline my-2 my-lg-0 mr-5'>
          <div class='md-form active-cyan-2 mb-3'>
            <input class='form-control' type='text' placeholder='Busca canciones aquí' aria-label='Search'>
          </div>
          <button class='btn btn-outline-light my-2 my-sm-0' type='submit'>
            <i class='fa fa-search'></i></button>
          </form>";
              } else{
                echo"";
              }
          ?>
       


        </div>
      </nav>


