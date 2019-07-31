<?php
include __DIR__.'/../View/Menu.php';
include_once __DIR__."/../Model/functions_connect.php";
?>
<div class="carrito">
<?php
if (isset($_SESSION['productos'])) {
  echo "<hr><h1>CARRITO DE LA COMPRA <a href='index.php?page=vaciarcarrito' onclick=deletecarrito()><i class='material-icons'>delete</i></a></h1><hr><table><tr><th>Producto ID</th><th>Nombre</th><th>Descripción</th><th>Cantidad</th><th>Precio</th><th></th><th></th><th></th></tr>";
  $precio_total = 0;
  $productos_total = 0;
  foreach ($_SESSION['productos'] as $clave => $valor) {
    $productos = getProducto($clave);
    foreach ($productos as $desc) {
      echo "<tr><td>".$clave."</td>";
      echo "<td>".$desc['nombre']."</td>";
      echo "<td>".$desc['descripcion']."</td>";
      echo "<td>".$valor."</td>";
      echo "<td>".$desc['precio']."€</td>";
      echo "<td><a href='index.php?page=add'><i class='material-icons'>exposure_plus_1</i></a></td>";
      echo "<td><a href='index.php?page=exposure'><i class='material-icons'>exposure_neg_1</i></a></td>";
      echo "<td><a href='#'><i class='material-icons'>delete</i></a></td></tr>";
      $precio_total = $precio_total + $desc['precio']*$valor;
      $productos_total = $productos_total + $valor;
    }
  }
  echo "</tr>";
  echo "<tfoot>";
  echo "<tr>";
  echo "<td  colspan='3' class='total'><b>TOTAL:</b></td>";
  echo "<td>".$productos_total."</td>";
  echo "<td>".$precio_total."€</td>";
  echo "</tr></tfoot>";
  echo "</table>";
  if ($productos_total > 0) {
     echo "<hr><h2><a href='index.php?page=pagar&precio=".$precio_total."&cantidad=".$productos_total."'>Finalizar Compra : <i class='material-icons'>payment</i></a></h2>";
  }

}
else {
  echo "<div id='vacio'>";
  echo "<h2>Carrito vacío, no se ha añadido ningún producto aún</h2><br>";
  echo "<h3>Para añadir productos puedes visitar las categorias:</h3><br>";
  echo "<h2><a href='index.php?page=categoria&q=1'>Hombre</a></h2><br>";
  echo "<h2><a href='index.php?page=categoria&q=2'>Mujer</a></h2><br>";
  echo "<h2><a href='index.php?page=categoria&q=3'>Niño</a></h2><br>";
  echo "</div>";
}
?>
</div>
