<table>
  <tr>
    <?php
    foreach ($Productos as $productos) { ?>
      <td class="container">
        <div class="producto-left" onclick=loadprod("index.php?page=producto&prod=<?php echo $productos['id']?>")>
          <div class="producto-foto-sub">
            <img class="sub-photo" src="<?php echo $rutaimagen, $productos['Photo']; ?>"></img>
          </div>
          <div class="sub-product">
            <p class="sub-title-product">Nombre: <?php echo $productos['nombre'];?></p>
            <p class="sub-title-product">Precio: <?php echo $productos['precio'];?>€</p>
          </div>
        </div>
      </td>
<?php } ?>
  </tr>
</table>
<div id=popup class=popup ></div>
