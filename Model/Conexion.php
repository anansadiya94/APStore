<?php
function connDB(){
  $dbinfo = "mysql:host=127.0.0.1;dbname=tdiw-d1;charset=utf8";
  $username = "tdiw-d1";
  $password = "dahdootu";
  $dbname = "tdiw-d1";

  //Intentar realizar la conexion, si no lanzar error
  try{
      $conn = new PDO($dbinfo, $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e){
      print "¡Error!: " . $e->getMessage() . "<br/>";
      die();
  }
  return $conn;
}
?>
