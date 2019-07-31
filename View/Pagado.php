<?php include __DIR__.'/Menu.php'; ?>
<body>
	<?php
	if (!isset($_REQUEST['error'])) {

?>
		<div class="pagar">
		<h2>Se ha agregado la nueva comanda </h2><br>
		<h4>Se puede ver en el panel de control</h4>
		</div>

		<div class="pagar">
		<h2>Se ha vaciado el carrito </h2>
		</div>

		<div class="pagar">
		<h2>Se ha finalizado la compra correctamente</h2>
		</div>
		<?php } else { ?>

		<div class="pagar">
		<h2>Se ha agregado la nueva comanda </h2>
		<h4>Se puede ver en el panel de control</h4>
		</div>

		<div class="pagar">
		<h2>Se ha vaciado el carrito </h2>
		</div>

		<div class="pagar">
		<h2>Se ha finalizado la compra correctamente</h2>
		</div>

		<?php } ?>
</body>
