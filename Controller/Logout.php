<?php
unset ($SESSION['username']);
session_destroy();
header('Location: ./index.php?page=login');
?>
