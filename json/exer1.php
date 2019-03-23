<?php
    $pessoas = array();
    array_push($pessoas, array(
        'Nome'=> 'João',
        'idade'=>20,
    ));

    array_push($pessoas, array(
        'Nome'=> 'Marcelo',
        'idade'=>27,
    ));

    array_push($pessoas, array(
        'Nome'=> 'Matheus',
        'idade'=>18,
    ));

    echo json_encode($pessoas);
?>