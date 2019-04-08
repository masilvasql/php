<?php

    $id = isset($_GET["id"]) ? $_GET["id"] : 1;

    if(!is_numeric($id) || strlen($id) > 5){
        exit ("Pegamos você");
    }

    $conn =  new mysqli("localhost","root","","dbphp7");

    $sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

    $exec = mysqli_query($conn, $sql);

    while($result = mysqli_fetch_object($exec)){
        echo $result->deslogin;
    }
?>