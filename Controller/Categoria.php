<?php
$cat_id = $_GET['q'];
include_once __DIR__."/../Model/functions_connect.php";
$Subcategorias = getSubCategories($cat_id);
include __DIR__."/../View/Subcategoria.php";
?>
