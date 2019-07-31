<?php
$id_prod = $_GET['prod'];
include_once __DIR__."/../Model/functions_connect.php";
$producto = getProducto($id_prod);
include __DIR__."/../View/Popup.php";
?>
