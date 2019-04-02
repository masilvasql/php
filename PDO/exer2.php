<?php
    $conn = new PDO("sqlsrv:Database=dbphp7;server=DESKTOP-68BB4S0\SQLEXPRESS;ConnectionPooling=0","usuarioteste","123456",null);

    $stmt = $conn->prepare("SELECT * FROM tb_usuarios");

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $dados) {       
        foreach ($dados as $key => $value) {
            echo "<strong>" . $key .":</strong>" . $value .'<br>';
        }
            echo "==================================================== <br>";
    }

?>