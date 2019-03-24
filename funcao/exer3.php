<?php
    function retornaNome($nome = 'oooo', $sobrenome = ''){
        return(
            "Olá, ${nome} $sobrenome"
        );
    }

    echo retornaNome('Marcelo', 'Abrão');
?>