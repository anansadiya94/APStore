<?php
include_once __DIR__.'/../Model/registro.php';
if($_GET['insertproduct'] == "1"){
  $error = false;
  $target_path = $absoluteruta . basename( $_FILES['imagen']['name']);
  $prec = $_POST["precio"];
  $desc = $_POST["descripcion"];
  $marc = $_POST["marca"];
  $nom = $_POST["nombre"];
  $sub = $_POST["subcategory"];
  $tal = $_POST["talla"];
  if (!preg_match('/^(se-|SE-){0,1}[0-9]{3}\s?(| |-)[0-9]{2}$/', $prec)) {
      $errMSG="precio erroni";
  }
  else if (empty($desc)) {
      $errMSG="Descripción vacio";
  }
  else if (empty($marc)) {
      $errMSG="marca vacio";
  }
  else if (empty($nom)) {
      $errMSG="Nombre vacio";
  }
  else if (empty($imag)) {
      $errMSG="No hay imagen";
  }
  else if (empty($prec)) {
      $errMSG="Precio vacio";
  }
  else if (empty($tal)) {
      $errMSG="Talla vacio";
  }

  $desc = htmlentities($desc, ENT_QUOTES | ENT_HTML5, 'UTF-8');
  $marc = htmlentities($marc, ENT_QUOTES | ENT_HTML5, 'UTF-8');
  $nom = htmlentities($nom, ENT_QUOTES | ENT_HTML5, 'UTF-8');
  $prec = htmlentities($prec, ENT_QUOTES | ENT_HTML5, 'UTF-8');
  $tal = htmlentities($tal, ENT_QUOTES | ENT_HTML5, 'UTF-8');
  if(!$error){
    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path)){
      echo "El archivo ha sido cargado correctamente.";
      registrarproducto($desc,$sub,$marc,$nom,$_FILES['imagen']['name'],$prec,$tal);
    } else {
      echo "error";
    }
  }
}
include __DIR__."/../View/NuevoProducto.php";
?>
