<?php
    header("Content-type: image/jpeg");

    $file = 'wallpaper.jpg';

    $new_width = 256;
    $new_height= 256;

    list($old_width, $old_height) = getimagesize($file);

    $newImage = imagecreatetruecolor($new_width, $new_height);

    $oldImage = imagecreatefromjpeg($file);

    imagecopyresampled($newImage, $oldImage, 0,0, 0, 0, $new_width, $new_height, $old_width, $old_height);

    imagejpeg($newImage);
    imagedestroy($oldImage);
    imagedestroy($newImage);

    /*
        parâmetros da função imagecopyresampled
        1- imagem nova
        2- imagem original
        3- onde inicia a imagem de destino
        4- onde finaliza a imagem de destino
        5- onde inicia a imagem original
        6- onde termina a imagem original
        7- largura da imagem destino
        8- altura imagem destino
        9- largura imagem origem
        10- altura imagem origem               
    */
?>