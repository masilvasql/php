<?php
    $anoNacimento = 1990;
    $nomeCompleto = '';
    $nome = 'Matheus';
    $sobrenome = 'Abrão';
    
    // comentários de linha

    /* 
        Comentário de bloco
    */

    echo $anoNacimento;

    echo "<br/>"; 

    unset($anoNacimento); 
    //unset "exclui" a variável
    
    if(isset($anoNacimento)){ 
        echo $anoNacimento;
    }
    //isset verifica se a variavel tem valor definido ou se variavel existe

    $nomeCompleto = $nome  . ' ' . $sobrenome;
    echo($nomeCompleto);

?>