<?php include __DIR__.'/Menu.php'; ?>
<div class="admin">
<hr><h1>Resultado de la busqueda</h1><hr>
<table>
  <tr>
    <th>Producto ID</th><th>Nombre</th><th>Descripción</th><th>Marca</th><th>Talla</th><th>Precio</th></tr>
    <?php
    foreach ($ProductosBusqueda as $productos) { ?>
	 	<tr>
	 		<td><?php echo $productos['id'];?></td>
			<td><?php echo $productos['nombre'];?></td>
			<td><?php echo $productos['descripcion'];?></td>
			<td><?php echo $productos['marca'];?></td>
			<td><?php echo $productos['talla'];?></td>
			<td><?php echo $productos['precio'];?>€</td>
      <td><button onclick=loadprod("index.php?page=producto&prod=<?php echo $productos['id']?>")> Ver </button></td>
		</tr>
	<?php } ?>
	</tr>
</table>
<div id=popup class =popup></div>
