<?php
$subcat_id = $_GET['sub'];
include_once _DIR_."/../Model/functions_connect.php";
$Productos = getProductos($subcat_id);
include _DIR_."/../View/Productos.php";
?>
