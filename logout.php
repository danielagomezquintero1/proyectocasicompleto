<?php
session_start();
unset($_SESSION['userlogin']);  
header("Location: indexofi.php");
?>

