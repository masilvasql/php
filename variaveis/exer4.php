<?php
    $nome = (int)$_GET["a"];
    $var2 = $_GET["b"];
    var_dump($nome);
    echo '<br/>';
    var_dump($var2);
    echo '<br/>';
    $ip = $_SERVER['REMOTE_ADDR']; //para buscar o ip da máquina
    echo $ip;
?>