<?php
session_start();
include 'Conexion.php';
$encontrado = 0;
if (isset($_REQUEST['id_producto'])) {
	$id_producto = $_REQUEST['id_producto'];
	$producto_cantidad = 1;
	echo "ID Producto: ".$id_producto."<br>";
	echo "Cantidad: ".$producto_cantidad."<br>";
	if(!isset($_SESSION["productos"])) {
			$cesta = array( "$id_producto" => "$producto_cantidad",);
			$_SESSION['productos']=$cesta;
			header('Location: ../index.php?page=carrito');
	  		exit;
      } else {
        /*	Comprobacion si existe el producto en la cesta */
        foreach ($_SESSION['productos'] as $clave => $valor) {
          if ($clave == $id_producto) {
				  $int = (int)$valor;
          $new_cantidad = $int +1;
          $_SESSION['productos'][$clave] = $new_cantidad;
          $encontrado = 1;
        }
		}
		if ($encontrado == 0) {
			$producto_cantidad = 1;
	  		$_SESSION['productos'][$id_producto]=$producto_cantidad;
		}
		header('Location: ../index.php?page=carrito');
	  	exit;
	}
}
else{
	echo "<h1>Ningun producto seleccionado";
}
?>
<html>
	<body>
		<form action="../index.php" method="get" accept-charset="utf-8">
			<br>
			<input type="submit" value="Volver">
		</form>
	</body>
</html>
