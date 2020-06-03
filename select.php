<?php
session_start();
if(isset($_POST["employee_id"])){ 
	 $output = ''; 
  $user = $_SESSION['userlogin'];
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
 $sql =$mysqli->query("SELECT * FROM users WHERE username='$user'");
                    $result=$sql->fetch_array();
   $sql2 =$mysqli->query("SELECT * FROM publicaciones WHERE user='".$result['id']."'");
                    $result2=$sql2->num_rows;
        while($publicaciones = $sql2->fetch_array()) {
          $sql3 = $mysqli->query("SELECT * FROM archivos WHERE publicacion ='".$publicaciones['id']."'");
          $result3 = $sql3->fetch_array();
          ?>

          <img class="m-3 view_data"name="view" value="view" id="<?php echo $result['id']; ?>" data-toggle="modal" style="width:29%"src='archivos/<?php echo $result3['ruta']; ?>');>
  


          <?php }  } ?>