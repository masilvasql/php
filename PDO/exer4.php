<?php
     $conn = new PDO("sqlsrv:Database=dbphp7;server=DESKTOP-68BB4S0\SQLEXPRESS;ConnectionPooling=0","usuarioteste","123456",null);

     $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = (?), dessenha = (?) WHERE idUsuario = ? ");

     $idUsuario = 3;
     $login = 'teste200';
     $senha = '123456789';

     $stmt->bindParam(1, $login);
     $stmt->bindParam(2, $senha);
     $stmt->bindParam(3, $idUsuario);
    

     $stmt->execute();

     echo "Dados Atualizados com sucesso";

?>