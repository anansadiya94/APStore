<?php
include '/Conexion.php';
function iniciarsesion($username,$password){
  $host_db = "localhost";
  $user_db = "tdiw-d1";
  $pass_db = "dahdootu";
  $db_name = "tdiw-d1";

  $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
  //$conexion = connDB();
  $admin = $_POST['admin'];
  $sql = "SELECT * FROM Usuario WHERE nombre = '$username' or correo = '$username'";
  $result = $conexion->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $admin = $row['admin'];
    $id = $row['id'];
   }else{
    echo "NO encotramos a: ".$username."<br>";
   }
  if (password_verify($password, $row['password'])) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['admin'] = $admin;
    $_SESSION['id'] = $id;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
    header('Location: ./index.php');
  } else {
    echo "Username o Password estan incorrectos.<br>";
    echo "$username <br>";
    echo "$password <br>";
    echo "$row[password]";
    echo "<br><a href='index.php?page=login'>Volver a Intentarlo</a>";
  }
  mysqli_close($conexion);
}
?>
