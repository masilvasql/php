<?php
    $nome = 'Marcelo';

    function teste(){
        global $nome;
        echo $nome;
    }

    function teste2(){
        $nome = 'pedro';
        echo $nome . ' ' . 'teste2';
    }

    teste();
    teste2();
?>