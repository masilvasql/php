<?php
    $name = "images";

    if(!is_dir($name)){
        mkdir($name);
        echo "Diretório criado com sucesso!";
    }else{
        rmdir($name);
        echo "O Diretório já existe! $name";
    }
?>