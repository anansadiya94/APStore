<?php
$id = $_GET['pro'];
include_once _DIR_."/../Model/functions_connect.php";
$Productos = getProducto($id);
include _DIR_."/../View/ProductoAjax.php";
?>
