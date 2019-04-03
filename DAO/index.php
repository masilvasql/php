<?php
    require_once('config.php');

    // $usu = new Usuario();
    // $usu->loadById(1);
    // echo $usu;

    // $lista = Usuario::getList();
    // echo json_encode($lista);

    // $busca = Usuario::search('mas');
    // echo json_encode($busca);

    $usu = new Usuario();
    $usu->login('masilva','12345');
    echo $usu;
    
?>