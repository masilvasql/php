<?php
    $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

    $stmt = $conn->prepare("SELECT * FROM tb_usuarios");

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $dados) {       
        foreach ($dados as $key => $value) {
            echo "<strong>" . $key .":</strong>" . $value .'<br>';
        }
            echo "==================================================== <br>";
    }

    // var_dump($results);

    
?>