<?php
include_once __DIR__.'/../Model/registro.php';
if($_GET['insertusuari'] == "1"){
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $direccion = $_POST["direccion"];
  $codigopostal = $_POST["codigopostal"];
  $poblacion =  $_POST["poblacion"];
  $psw = $_POST["password"];
  $error = false;

  if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errMSG="correo incorrecte";
    }
    else if (!preg_match('/^[A-Za-zéåäöÅÄÖ\s\ ]*$/', $nombre)) {
        $errMSG="nombre incorrecte";
    }
    else if (!preg_match('/^[A-Za-z0-9éåäöÅÄÖ\s\ ]*$/', $direccion)) {
        $errMSG="dirección invalida";
    }
    else if (!preg_match('/^(se-|SE-){0,1}[0-9]{3}\s?(| |-)[0-9]{2}$/', $codigopostal)) {
        $errMSG="Codi Postal erroni";
    }
    else if (!preg_match('/^[A-Za-zéåäöÅÄÖ\s\ ]*$/', $poblacion)) {
        $errMSG="Población Incorrecte";
    }
    else if (!preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', $psw)) {
        $errMSG="Contraseña incorrecta";
    }
    else if (empty($nombre)) {
        $errMSG="Nombre vacio";
    }
    else if (empty($direccion)) {
        $errMSG="dirección vacio";
    }
    else if (empty($poblacion)) {
        $errMSG="población vacio";
    }
    else if (empty($correo)) {
        $errMSG="corroe vacio";
    }
    else if (empty($codigopostal)) {
        $errMSG="Codigo postal vacio";
    }
    else if (empty($psw)) {
        $errMSG="contraseña vacia";
    }

    if(!$error){
      registrarusuario($nombre, $correo, $psw, $direccion ,$poblacion, $codigopostal);
      $errTyp = "Success!";
      $errMSG = "Usuario registrado correctamente, ya puede iniciar sesión";
    }
  }
include __DIR__."../../View/Registrarse.php";
?>
