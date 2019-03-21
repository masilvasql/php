<?php

    //TIPOS Básicos
    $nome = 'HCODE';
    $site = "www.google.com.br";
    $ano = 1990;
    $salario = 5500.99;
    $bloqueado = true;

    //////////////////////////////////
    //TIPOS COMPOSTOS
    $frutas = array('Abacaxi', 'laranja', 'Maçã');
    echo $frutas[2];

    $nascimento = new DateTime();
    echo "<br/>";
    var_dump ($nascimento);
    echo "<br/>";

     //////////////////////////////////
    //TIPOS ESPECIAIS
    $arquivo = fopen("exer3.php",'r');
    var_dump($arquivo);
    echo "<br/>";
    
    $nulo = NULL;
    $vazio='';
    
    var_dump($nulo);

?>