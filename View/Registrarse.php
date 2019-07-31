<?php include __DIR__.'/Menu.php'; ?>

<form class="login" method="POST" action="index.php?page=signup&insertusuari=1">
  <div id="register-container">
  <h1 class="login-title">Registrarse</h1>
  <?php
   if ( isset($errMSG) ) {
     echo "<h3>".$errMSG."</h3>";
   }
  ?>
  <br>
  <input name="nombre" type="text" class="login-input" placeholder="Nombre" class="nombre" pattern="[A-Za-z-A]{4,}" title="El título ha de contener
                     como mínimo una longitud de 4 carácteres" autofocus required>
  <input name="password" type="password" class="login-input" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                           title="Debe contener al menos 8 caracteres con 1 mayúscula, una minúscula y un número" autofocus required>
  <input name="correo" type="text" class="login-input" placeholder="Correo"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                           title="No es una dirección de email válida" autofocus required>
  <input name="direccion" type="text" class="login-input" placeholder="Dirección" pattern=".{,30}" title="La dirección ha de tener como máximo 30 carácteres" autofocus>
  <input name="poblacion" type="text" class="login-input" placeholder="Población" autofocus>
  <input name="codigopostal" type="text" class="login-input" placeholder="Código Postal" pattern="[0-9]{,5}" title="El código postal ha tener, como máximo 5 números" autofocus>
  <input name="submit" type="submit" value="Regístrate" class="login-button">
</form>
