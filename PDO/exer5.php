<?php
     $conn = new PDO("sqlsrv:Database=dbphp7;server=DESKTOP-68BB4S0\SQLEXPRESS;ConnectionPooling=0","usuarioteste","123456",null);
     $stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idUsuario = ? ");

     $idUsuario = 3;
  
     $stmt->bindParam(1, $idUsuario);
  

     $stmt->execute();

     echo "Dados Deletados com sucesso";

?>