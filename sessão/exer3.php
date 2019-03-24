<?php
    session_start();
    unset($_SESSION['nome']); // APAGA VARIÁVEL  
    if(isset($_SESSION['nome'])){
       
        echo $_SESSION['nome'];
    }else{
        echo 'não tem nada';
    }

    session_destroy(); //elimina a variável e remove o usuário
    
?>