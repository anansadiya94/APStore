<?php include __DIR__.'/Menu.php';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  echo "<h3>Bienvenido " . $_SESSION['username'] ." !</h3></br>";
  echo "<a href='http://deic-dc0.uab.cat/~tdiw-d1/index.php?page=paneluser'>Panel de Control</a></br>";
  echo "<a href='http://deic-dc0.uab.cat/~tdiw-d1/index.php?page=logout'>Logout</a>";
} else {
  if(isset($_REQUEST['carrito']) && $_REQUEST['carrito'] == 1){ ?>
    <form class="login" action="index.php?page=checklogin" method="post">
      <h1 class="login-title">Iniciar Sesión</h1>
      <h3>Debes iniciar sesión para finalizar la compra</h3>
      <br>
      <input type="text" name="user" class="login-input" placeholder="Correo" autofocus>
      <input type="password" name="passwd" class="login-input" placeholder="Contraseña">
      <input type="submit" value="Inicia sesión" class="login-button">
    </form>
  <?php  }
  else { ?>
  <form class="login" action="index.php?page=checklogin" method="post">
    <h1 class="login-title">Iniciar Sesión</h1>
    <input type="text" name="user" class="login-input" placeholder="Correo" autofocus>
    <input type="password" name="passwd" class="login-input" placeholder="Contraseña">
    <input type="submit" value="Inicia sesión" class="login-button">
  </form>
<?php } } ?>
