<div class="producto-foto-popup">
  <img class="sub-photo" src="<?php echo $rutaimagen,$producto[0]['Photo']; ?>"></img>
</div>
<div id="sub-product1">
  <table>
    <tr>
      <th><p>Nombre:</p></td>
      <td><p><?php echo $producto[0]['nombre'];?></p></td>
      <td rowspan="5">
        <form action="Controller/Cesta.php" method="get" accept-charset="utf-8">
          <input type="hidden" name="id_producto" value='<?php echo $producto[0]['id'] ?>'><br>
          <button type="submit" value="Añadir al carrito"><i class="material-icons">add_shopping_cart</i></button>
        </form>
      </td>
    </tr>
    <tr>
      <th><p>Descripcion:</p></td>
      <td><p><?php echo $producto[0]['descripcion'];?></p></td>
    </tr>
    <tr>
      <td><p>Marca:</p></td>
      <td><p><?php echo $producto[0]['marca'];?></p></td>
    </tr>
    <tr>
      <th><p>Talla:</p></td>
      <td><p><?php echo $producto[0]['talla'];?></p></td>
    </tr>
    <tr>
      <td><p>Precio:</p></td>
      <td><p><?php echo $producto[0]['precio'];?>€</p></td>
    </tr>
  </table>
</div>
