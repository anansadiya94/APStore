<?php
$busqueda = $_REQUEST['busqueda'];
include_once __DIR__."/../Model/functions_connect.php";
$ProductosBusqueda = getProductosBusqueda($busqueda);
include __DIR__."/../View/Buscador.php";
?>
