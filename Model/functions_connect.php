<?php
include 'Conexion.php';

//Recupera todas las categorias de la base de datos
function getCategories(){
  $conn = connDB();
  $sql = $conn->prepare("SELECT nombre, id FROM Categoria ORDER BY nombre");
  $sql->execute();
  $result = $sql->fetchAll();
  $conn = null;
  return $result;
}

function getSubCategories($cat_id){
  $conn = connDB();
  $sql = $conn->prepare("SELECT nombre,id,Photo FROM Subcategoria WHERE id_categoria=".$cat_id."");
  $sql->execute();
  $result = $sql->fetchAll();
  $conn = null;
  return $result;
}

function getProductos($subcat_id){
  $conn = connDB();
  $sql = $conn->prepare("SELECT nombre, id, descripcion, marca, talla, precio, Photo FROM Producto WHERE id_subcategoria=".$subcat_id."");
  $sql->execute();
  $result = $sql->fetchAll();
  $conn = null;
  return $result;
}

function getProducto($producto_id){
  $conn = connDB();
  $sql = $conn->prepare("SELECT nombre, id, descripcion, marca, talla, precio, Photo FROM Producto WHERE id=".$producto_id."");
  $sql->execute();
  $result = $sql->fetchAll();
  $conn = null;
  return $result;
}

function getProductosBusqueda($busqueda) {
  $conn = connDB();
  $sql = $conn->prepare("SELECT nombre, id, descripcion, marca, talla, precio, Photo FROM Producto WHERE nombre LIKE '%$busqueda%' or marca LIKE '%$busqueda%' or descripcion LIKE '%$busqueda%'");
  $sql->execute();
  $result = $sql->fetchAll();
  $conn = null;
  return $result;
}

function getListaProductos() {
  $conn = connDB();
  $sql = $conn->prepare("SELECT nombre, id, descripcion, marca, talla, precio, Photo FROM Producto ");
  $sql->execute();
  $result = $sql->fetchAll();
  $conn = null;
  return $result;
}

function getListaCompra() {
  $conn = connDB();
  $sql = $conn->prepare("SELECT id, fecha, precio, cantidad, id_usuario FROM Comanda ");
  $sql->execute();
  $result = $sql->fetchAll();
  $conn = null;
  return $result;
}

function getListaCompraUsuario($userid) {
  $conn = connDB();
  $sql = $conn->prepare("SELECT id, fecha, precio, cantidad, id_usuario FROM Comanda WHERE id_usuario=".$userid."");
  $sql->execute();
  $result = $sql->fetchAll();
  $conn = null;
  return $result;
}

function getListaComandaUsuario($idcomanda) {
  $conn = connDB();
  $sql = $conn->prepare("SELECT id, id_comanda, id_producto, precio_unitario, cantidad, total FROM Linea WHERE id_comanda=".$idcomanda."");
  $sql->execute();
  $result = $sql->fetchAll();
  $conn = null;
  return $result;
}

function getDatosUsuario($userid){
  $conn = connDB();
  $sql = $conn->prepare("SELECT nombre, correo, direccion, poblacion, codigopostal FROM Usuario WHERE id=".$userid."");
  $sql->execute();
  $result = $sql->fetchAll();
  $conn = null;
  return $result;
}


?>
