<?php include __DIR__.'/../View/Menu.php'; ?>
<div class="admin">
	<hr><h1>Administración</h1><hr>
	<h2>Lista de productos</h2><hr>
	<table>
	 	<tr>
	    	<th>Producto ID</th><th>Nombre</th><th>Descripción</th><th>Marca</th><th>Talla</th><th>Precio</th></tr>
			<?php
			foreach ($ListaProductos as $productos) { ?>
	  			<tr>
					<td><?php echo $productos['id'];?></td>
					<td><?php echo $productos['nombre'];?></td>
					<td><?php echo $productos['descripcion'];?></td>
					<td><?php echo $productos['marca'];?></td>
					<td><?php echo $productos['talla'];?></td>
					<td><?php echo $productos['precio'];?>€</td>
				</tr>
			<?php } ?>
			<tr><a href="index.php?page=nuevoproducto"> Añadir producto nuevo</a> </tr>
		</tr>
	</table>
</div>
