<?php
   
   if(!is_dir("imagens")){
       mkdir("imagens");
   }


   foreach(scandir("imagens") as $item){
    if(!in_array($item, array('.','..'))){
        unlink("imagens/" . DIRECTORY_SEPARATOR . $item);
    }
   }

   echo 'ok';

?>