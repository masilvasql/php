<?php
    function soma(float ...$valores):string{
        return array_sum($valores);
    }

    echo var_dump(soma(2,2,4));
    echo '<br>';
    echo soma(2,3,4,5,6,7,9.5);
?>