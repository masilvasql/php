<?php
    $pasta = "arquivos";

    if(!is_dir($pasta)){
        mkdir($pasta,);
        echo "diretório criado com sucesso";
    }
?>