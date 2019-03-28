<?php
    $conn = new mysqli("localhost","root","","dbphp7");
    
    if($conn->connect_error){
        echo 'Error: ' . $conn->connect_error;
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");

    /*  
        primeiro parametro é o tipo de dado dos valores a serem enviados para o banco 
        s = STRING, VARCHAR e outros tipos de string
        f = float,
        d = double,
        b = bloob;
    */

    $login = 'user';
    $pass = '123456';
    
    $stmt->bind_param("ss",$login, $pass); 

    $stmt->execute();



?>