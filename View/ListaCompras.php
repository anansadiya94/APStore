<?php include __DIR__.'/../View/Menu.php'; ?>
<div class="carrito">
	<hr><h1>Lista de compras realizadas</h1><hr>
	<h2>Lista de Compra</h2><hr>
	<table>
		<tr>
	    	<th>Compra ID</th><th>Fecha</th><th>Precio</th><th>Cantidad</th><th>Id del usuario</th></tr>
			<?php
			foreach ($ListaCompra as $compra) { ?>
				<tr>
					<td><?php echo $compra['id'];?></td>
					<td><?php echo $compra['fecha'];?></td>
					<td><?php echo $compra['precio'];?>€</td>
					<td><?php echo $compra['cantidad'];?></td>
					<td><?php echo $compra['id_usuario'];?></td>
				</tr>
				<tr>
				<td></td>
				<td colspan="4">
					<?php $ListaComanda = getListaComandaUsuario($compra['id']); ?>
				<table>
				<tr>
					<th>Linea ID</th><th>Id comanda</th><th>Id producto</th><th>Precio Unitario</th><th>Cantidad</th><th>Total</th></tr>
			<?php
			foreach ($ListaComanda as $prod) { ?>
				<tr>
						<td><?php echo $prod['id'];?></td>
						<td><?php echo $prod['id_comanda'];?></td>
						<td><?php echo $prod['id_producto'];?></td>
						<td><?php echo $prod['precio_unitario'];?>€</td>
						<td><?php echo $prod['cantidad'];?></td>
						<td><?php echo $prod['total'];?>€</td>
				</tr>
			<?php } ?>
		</table>
					</td>
					</tr>


			<?php } ?>
		</tr>
	</table>
</div>
