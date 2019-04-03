<?php
    require_once('config.php');

    $usu = new Usuario();
    $usu->loadById(1);
    
    echo $usu;
?>