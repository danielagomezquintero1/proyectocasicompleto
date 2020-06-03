<?php
session_start();
?>

<!doctype html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
<form id="loginform" method="post">
    <div>
        Username:
        <input type="text" name="username" id="username" />
        Password:
        <input type="password" name="password" id="password" />    
        <input type="submit" name="loginBtn" id="loginBtn" value="Login" />
        
    </div>
</form>

<form id="registroform" method="post">
    <div>
        Username:
        <input type="text" name="username1" id="username1" />
        Lastname:
        <input type="text" name="lastname" id="lastname" />
        email:
        <input type="text" name="email" id="email" />
        Password:
        <input type="password" name="password1" id="password1" />    
        <input type="submit" name="loginBtn" id="loginBtn" value="Registrarse" />
    </div>
</form>


<script type="text/javascript">
$(document).ready(function() {
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
                    location.href = "privado.php";
                    exit;
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
                    location.href = "privado.php";
                    exit;
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
