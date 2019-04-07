<?php
    $image = imagecreatefromjpeg('img'. DIRECTORY_SEPARATOR .'certificado2.jpg');

    $titleColor = imagecolorallocate($image, 0,0,0);

    $gray = imagecolorallocate($image, 100,100,100);

    imagettftext(
        $image, 130, 0, 900, 750, $titleColor, __DIR__ 
        . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR 
        . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "CERTIFICADO");

    imagettftext($image, 80, 0, 800, 1100, $titleColor, __DIR__
    . DIRECTORY_SEPARATOR ."fonts" . DIRECTORY_SEPARATOR 
    . "Playball". DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Certificamos que este certificado certificou
    certificadamente o aluno certificado");

        
    imagettftext($image, 100, 0, 1000, 1500, $titleColor, __DIR__
    . DIRECTORY_SEPARATOR ."fonts" . DIRECTORY_SEPARATOR 
    . "Playball". DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Marcelo Abrão da Silva");
    
    imagettftext($image, 50, 0, 1250, 1700, $titleColor, __DIR__
    . DIRECTORY_SEPARATOR ."fonts" . DIRECTORY_SEPARATOR 
    . "Playball". DIRECTORY_SEPARATOR."Playball-Regular.ttf", utf8_decode("Concluído em: "). date('d/m/y'));
   

    header("Content-type: image/jpeg");

 //    imagejpeg($image,"certificado".date('Y-m-d').'.jpeg');
    imagejpeg($image);
    imagedestroy($image);
