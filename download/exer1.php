<?php
    $link = "https://www.venditan.com/wp-content/uploads/2018/12/omnichannel-2-mobile-image.png";

    $options=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );  
     
    $result = file_get_contents($link, false, stream_context_create($options));


    $parse = parse_url($link);

    $baseName = basename($parse['path']);
    
    $file = fopen($baseName, "w+");

    fwrite($file, $result);

    fclose($file);


?>

<img src="<?=$baseName?>"/>