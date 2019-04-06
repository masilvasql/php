<?php
   
   function trataNome($name){
       if(!$name){
           throw new Exception("Nenhum nome foi fornecido", 1);
           
       }

       echo ucfirst($name) . '<br>';
   }


   try {
       trataNome("Marcelo");
       trataNome("");
   } catch (Exception $e) {
       echo $e->getMessage();
   }finally{
       echo "Executou o try";
   }

?>