<?php
//include './lib/password.php' ;
include_once __DIR__.'/../Model/iniciosesion.php';
iniciarsesion($_POST['user'],$_POST['passwd']);
?>
