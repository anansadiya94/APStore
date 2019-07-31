<?php
include_once __DIR__."/../Model/functions_connect.php";
$userid = $_SESSION['id'];
$datosusuario = getDatosUsuario($userid);
include __DIR__."/../View/MiPerfil.php";
?>
