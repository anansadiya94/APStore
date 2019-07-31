<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AP store</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/IniciarSesion.css">
    <link rel="stylesheet" href="css/Carrito.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="Model/ajax.js"></script>
</head>
<body>
<div class="header">
    <h1>AP store</h1>
</div>
<div class="menu">
    <nav>
        <ul>
            <li> <a href="index.php?page=home">Inicio <span class="icon icon-up-dir"></span></a></li>
            <!-- las categorias -->
            <?php foreach ($categorias as $categoria): ?>
                <li> <a href="index.php?page=categoria&q=<?php echo $categoria['id'] ?>"><?php echo $categoria['nombre'] ?> <span class="icon icon-up-dir"></span></a><li>
            <?php endforeach;
            ?>
            <li> <a href="index.php?page=contactus">Contacto <span class="icon icon-up-dir"></span></a></li>
            <!-- usuario-->
            <?php
                session_start();
                $rutaimagen = "Fotos/";
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                    if($_SESSION['admin'] == 0) {
                      echo "<li class='user'> <i id='perfil' class='material-icons'>account_box</i><li>";
                    }
                    else {
                        echo "<li> <a href='index.php?page=admin'>Admin <span class='icon icon-up-dir'></span></a></li>";
                        echo "<li class='user'> <i id='perfil' class='material-icons'>account_box</i><li>";
                    }
                } else { ?>
                <li> <a href="index.php?page=login" >Iniciar Sesión <span class="icon icon-up-dir"></span></a></li>
                <li> <a href="index.php?page=signup">Registrarse <span class="icon icon-up-dir"></span></a></li>

                <?php } ?>
            <li class="buscador">
                <form action="index.php?page=buscador" method="post" accept-charset="utf-8">
                    <input type="text" name="busqueda" placeholder="Buscar...">
                    <button type="submit"><i class="material-icons">search</i></button>
                </form>
            </li>
            <li class="buscador"> <a href="index.php?page=carrito"><i class="material-icons">shopping_cart</i> <span class="icon icon-up-dir"></span></a></li>
        </ul>
    </nav>
</div>
</div>
<div class = "miperfil" id = "miperfil">
  <a href = "index.php?page=miperfil">Mi Perfil</a></br>
  <a href = "index.php?page=listadecompras">Mis compras</a></br>
  <a href = "index.php?page=logout">Logout</a></br>
</div>
<footer>
    <script src="Model/miperfil.js"></script>
</footer>
</body>
</html>
