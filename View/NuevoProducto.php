<?php include __DIR__.'/Menu.php'; ?>
<div>
    <form class="login" action="index.php?page=nuevoproducto&insertproduct=1" method="POST" enctype="multipart/form-data">
      <h1 class="login-title">Nuevo producto</h1>
      <select name="subcategory" class="login-input">
        <option value="1">Hombre - Ropa</option>
        <option value="2">Hombre - Calzado</option>
        <option value="3">Hombre - Accesiorios</option>
        <option value="4">Mujer - Ropa</option>
        <option value="5">Mujer - Calzado</option>
        <option value="6">Mujer - Accesiorios</option>
        <option value="7">Niño - Ropa</option>
        <option value="8">Niño - Calzado</option>
        <option value="9">Niño - Accesiorios</option>

      </select>
      <input type="text" name="nombre" class="login-input" placeholder="Nombre" autofocus>
      <input type="text" name="descripcion" class="login-input" placeholder="Descripcion" autofocus>
      <input type="text" name="marca" class="login-input" placeholder="Marca" autofocus>
      <input type="text" name="talla" class="login-input" placeholder="Talla" autofocus>
      <input type="text" name="precio" class="login-input" placeholder="Precio" autofocus>
      <input type="file" name="imagen" class="login-input" placeholder="URL-Imagen" autofocus>
      <input type="submit" value="Enviar" class="login-button">
    </form>
</div>
