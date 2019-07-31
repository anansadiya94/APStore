<?php

include '/Conexion.php';

function registrarproducto($desc, $subcategoria, $marc, $nom, $imag, $prec, $tal) {
  $conn = connDB();
  $sql = $conn->prepare('INSERT INTO Producto(descripcion,id_subcategoria,marca,nombre,Photo,precio,talla) VALUES(:descripcio,:id_subcategori,:marc,:nombr,:Phot,:preci,:tall)');
  $sql->bindParam(':descripcio', $desc,PDO::PARAM_STR);
  $sql->bindParam(':id_subcategori', $subcategoria,PDO::PARAM_STR);
  $sql->bindParam(':marc', $marc,PDO::PARAM_STR);
  $sql->bindParam(':nombr', $nom,PDO::PARAM_STR);
  $sql->bindParam(':Phot', $imag,PDO::PARAM_STR);
  $sql->bindParam(':preci', $prec,PDO::PARAM_STR);
  $sql->bindParam(':tall', $tal,PDO::PARAM_STR);
  $sql->execute();

  if ($sql) {
    $errTyp = "Success!";
    $errMSG = "Producto registrado correctamente, ya puede hacer LogIn";
    unset($descripcion);
    unset($id_subcategoria);
    unset($marca);
    unset($nombre);
    unset($Photo);
    unset($precio);
    unset($talla);
  } else {
    $errTyp = "Error";
    $errMSG = "Error... algo fué mal en el registro, prueba mas tarde";
  }
}

function registrarusuario($nombre, $correo, $psw, $direccion, $poblacion, $codigopostal) {
  $admin=0;
  if($_GET['insertusuari'] == "1"){

    /*  $nombre = htmlentities($nombre, ENT_QUOTES | ENT_HTML5, 'UTF-8');
      $direccion = htmlentities($direccion, ENT_QUOTES | ENT_HTML5, 'UTF-8');
      $poblacion = htmlentities($poblacion, ENT_QUOTES | ENT_HTML5, 'UTF-8');
      $codigopostal = htmlentities($codigopostal, ENT_QUOTES | ENT_HTML5, 'UTF-8');
*/

  $pwd=password_hash($psw, PASSWORD_DEFAULT);
  $conn = connDB();
  $sql = $conn->prepare('INSERT INTO Usuario(nombre, correo, password, direccion, poblacion, codigopostal,admin) VALUES(:name,:email,:password,:dir,:poblacion,:codigo,:admin)');
  $sql->bindParam(':name', $nombre,PDO::PARAM_STR);
  $sql->bindParam(':password', $pwd,PDO::PARAM_STR);
  $sql->bindParam(':email', $correo,PDO::PARAM_STR);
  $sql->bindParam(':dir', $direccion,PDO::PARAM_STR);
  $sql->bindParam(':poblacion', $poblacion,PDO::PARAM_STR);
  $sql->bindParam(':codigo', $codigopostal,PDO::PARAM_STR);
  $sql->bindParam(':admin', $admin,PDO::PARAM_STR);
  $sql->execute();

  if ($sql) {
    $errTyp = "Success!";
    $errMSG = "Usuario registrado correctamente, ya puede iniciar sesión";
    unset($nombre);
    unset($password);
    unset($correo);
    unset($direccion);
    unset($poblacion);
    unset($codigopostal);
  } else {
    $errTyp = "Error";
    $errMSG = "Error... algo fué mal en el registro, prueba mas tarde";
  }
  }
}
?>
