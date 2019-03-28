<?php
    require_once("config.php");
    use Cliente\Cadastro; // utilizando a classe cadastro da pasta cliente
    $cad = new Cadastro();

    $cad->setNome("Marcelo");
    $cad->setEmail("masilvasql@gmail.com");
    $cad->setSenha("123465");

    $cad->registrarVenda();
?>