<?php
     $conn = new PDO("sqlsrv:Database=dbphp7;server=DESKTOP-68BB4S0\SQLEXPRESS;ConnectionPooling=0","usuarioteste","123456",null);

     $conn->beginTransaction();

     $stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idUsuario = ? ");

     $idUsuario = 2;
  
     $stmt->execute(array($idUsuario));
  
    //  $conn->rollBack();
     $conn->commit();

     echo "Dados Deletados com sucesso";

?>