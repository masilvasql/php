<form>
    <input type ='text' name = 'nome'>
    <input type ='date' name = 'nascimento'>
    <input type ='submit' value = 'OK!'>
</form>

<?php
    foreach($_GET as $key => $value){
        echo "Nome do campo $key";
        echo '<br>';
        echo "Valor do campo $value";
        echo '<br>';
    }

?>