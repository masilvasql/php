<?php

    function incluirClasses($nomeClasse){ // VERIFICA SE A CLASSE CHAMADA EXISTE DENTRO DA PASTA ATUAL
        if(file_exists($nomeClasse.".php") === true){
            echo var_dump($nomeClasse);
            require_once($nomeClasse.".php");
        }
    }
    
    spl_autoload_register("incluirClasses"); //standard php library = spl // VAI CHAMAR A FUNÇÃO incluirClasses (é passada como string mesmo)

    spl_autoload_register(function($nomeClasse){ // VAI VERIFICAR SE EXISTE A CLASSE ABSTRATA NA PASTA CHAMADA A BAIXO
        if(file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){
            echo var_dump($nomeClasse);
            require_once('abstratas'. DIRECTORY_SEPARATOR . $nomeClasse.".php");
        }
    });

    $carro = new DelRey();
    $carro->acelerar(80);
?>