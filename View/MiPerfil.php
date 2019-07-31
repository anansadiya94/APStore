<?php include __DIR__.'/../View/Menu.php'; ?>
<div class="carrito">
  <hr><h1>Datos de mi perfil</h1><hr>
  <table>
        <tr>
          <tr>
            <td>Nombre:</td>
            <td><?php echo $datosusuario[0]['nombre'];?></td>
          </tr>
          <tr>
            <td>Correo:</td>
            <td><?php echo $datosusuario[0]['correo'];?></td>
          </tr>
          <tr>
            <td>Dirección:</td>
            <td><?php echo $datosusuario[0]['direccion'];?></td>
          </tr>
          <tr>
            <td>Población:</td>
            <td><?php echo $datosusuario[0]['poblacion'];?></td>
          </tr>
          <tr>
            <td>CP:</td>
            <td><?php echo $datosusuario[0]['codigopostal'];?></td>
          </tr>
    </tr>
  </table>
