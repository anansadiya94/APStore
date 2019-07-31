<?php
include_once __DIR__."/../Model/functions_connect.php";
$ListaProductos = getListaProductos();
include __DIR__."/../View/ListaProductosAdmin.php";
?>
