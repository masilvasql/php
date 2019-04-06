<?php
    $cep = '89515000';

    $link = "https://viacep.com.br/ws/$cep/json/";

    $ch = curl_init($link);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // envia e traz retorno
    
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // não valida SSL se está registrado em algum lugar

    $response = curl_exec($ch);
    
    curl_close($ch);

    $data = json_decode($response, true); // true transforma em array, caso contrário, vira objeto

    print_r($data);
?>