<?php
    $conn = new mysqli("localhost","root","","dbphp7");
    
    if($conn->connect_error){
        echo 'Error: ' . $conn->connect_error;
        exit;
    }

    $result = $conn->query("SELECT * FROM tb_usuarios");

    $data = array();

    while($row = $result->fetch_assoc()){ //fetch_array ira percorrer a variável result
        array_push($data, $row);
        // var_dump($row);
    }

    echo json_encode($data);


?>