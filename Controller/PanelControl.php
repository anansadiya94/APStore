<?php 
include_once __DIR__."/../Model/functions_connect.php";
$userid = $_SESSION['id'];
$ListaCompra = getListaCompraUsuario($userid);
include __DIR__."/../View/PanelControl.php";
?>
