<?php
require __DIR__.'/../Model/functions_connect.php';
$categorias = getCategories();
include __DIR__."/../View/Menu.php";
?>
