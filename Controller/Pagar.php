<?php
include_once __DIR__."/../Model/functions_connect.php";
include_once __DIR__."/../Model/pagar.php";
$precio = $_REQUEST['precio'];
$cantidad = $_REQUEST['cantidad'];
$userid = $_SESSION['id'];
$fecha = date("Y-m-d");
if (!isset($_SESSION['id'])) {
	header("location:index.php?page=login&carrito=1");
	} else {
		insertarcomanda($precio, $cantidad, $userid, $fecha);
		header("location:index.php?page=pagado");
	}
?>
