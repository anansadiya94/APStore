<?php
include '/Conexion.php';

function insertarcomanda($precio, $cantidad, $userid, $fecha) {
  $conn = connDB();
	$sql = $conn->prepare('INSERT INTO Comanda(fecha, precio, cantidad, id_usuario) VALUES(:fecha,:precio,:cantidad,:id_usuario)');
	$sql->bindParam(':fecha', $fecha,PDO::PARAM_STR);
	$sql->bindParam(':precio', $precio,PDO::PARAM_STR);
	$sql->bindParam(':cantidad', $cantidad,PDO::PARAM_STR);
	$sql->bindParam(':id_usuario', $userid,PDO::PARAM_STR);
	$sql->execute();

	$idcom = $conn->prepare('SELECT MAX(id) FROM Comanda');
	$idcom->execute();
	$idcom = $idcom->fetchAll();

	foreach ($_SESSION['productos'] as $idprod => $cantidad) {
		$sql1 = $conn->prepare('INSERT INTO Linea(id_comanda, id_producto, precio_unitario, cantidad, total) VALUES(:id_comanda,:id_producto,:precio_unitario,:cantidad,:total)');
		$sql1->bindParam(':id_comanda', $idcom[0][0],PDO::PARAM_STR);
		$sql1->bindParam(':id_producto', $idprod,PDO::PARAM_STR);

		$precio_unitario =  $conn->prepare('SELECT precio FROM Producto WHERE id='.$idprod.'');
		$precio_unitario->execute();
		$precio_unitario = $precio_unitario->fetchAll();
		$sql1->bindParam(':precio_unitario', $precio_unitario[0][0],PDO::PARAM_STR);

		$sql1->bindParam(':cantidad', $cantidad,PDO::PARAM_STR);
		$total = (int)$cantidad * (int)$precio_unitario[0][0];
		$sql1->bindParam(':total', $total,PDO::PARAM_STR);
		$sql1->execute();
	}

	if ($sql) {
		$errTyp = "Success!";
		$errMSG = "Usuario registrado correctamente, ya puede hacer LogIn";
		unset($fecha);
		unset($precio);
		unset($cantidad);
		unset($userid);
		unset($_SESSION['productos']);
  }
  else {
		include __DIR__.'/../View/Pagar.php?error=1';
	  	$errTyp = "Error";
	  	$errMSG = "Error... algo fué mal en el registro, prueba mas tarde";
	}
}
