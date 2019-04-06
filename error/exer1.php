<?php
    function error_handler($code, $message, $file, $line){
        echo json_encode(
            array(
                "code"=>$code,
                "message"=>$message,
                "file"=>$file,
                "line"=>$line
            )
        );
    }

    //a função abaixo vai ser chamada se der um erro
    //o parâmetro é uma string mas, faz referência à função criada à cima
    set_error_handler('error_handler'); 

    echo 100 / 0;

?>