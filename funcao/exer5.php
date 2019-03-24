<?php
    function soma(float ...$valores){
        return array_sum($valores);
    }

    echo soma(2,2,4);
    echo '<br>';
    echo soma(2,3,4,5,6,7,9.5);
?>