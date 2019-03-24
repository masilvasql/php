<?php
    $data = new DateTime();
    $periodo = new DateInterval("P15D"); // P = Período, 15 total de dias D = Dias 
    echo $data->format('d/m/Y H:i:s');
    $data -> add($periodo);
    echo '<br>';
    echo $data->format('d/m/Y H:i:s');
?>