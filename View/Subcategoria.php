<?php include __DIR__.'/Menu.php'; ?>
<div align="center">
<table>
  <tr>
  <?php foreach ($Subcategorias as $subcategoria) { ?>
    <td class="container">
      <div class="producto-left">
        <div class="producto-foto">
          <img class="sub-photo" src="<?php echo $rutaimagen, $subcategoria['Photo']; ?>"></img>
        </div>
        <div class="sub">
          <a class="sub-title subcategory" href="javascript:" data-id="<?php echo $subcategoria['id'] ?>"><?php echo $subcategoria['nombre'];?></a>
        </div>
      </div>
    </td>
<?php } ?>
</tr>
</table>
<div id="productos"></div>
</div>
