<?php
     $conn = new PDO("sqlsrv:Database=dbphp7;server=DESKTOP-68BB4S0\SQLEXPRESS;ConnectionPooling=0","usuarioteste","123456",null);

     $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

     $login = 'teste2';
     $password = 'senha';

     $stmt->bindParam(1, $login);
     $stmt->bindParam(2, $password);

     $stmt->execute();

     echo "Dados inseridos com sucesso";

?>