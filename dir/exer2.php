<?php
    $images = scandir("images");
    
    $data = array();
    
    foreach($images as $img){
        if(!in_array($img, array('.','..'))){
            $fileName = "images" . DIRECTORY_SEPARATOR . $img;
            
            $info = pathinfo($fileName);
            $info["size"] = filesize($fileName);
            $info["modified"] = date("D/m/y H:i:s", filemtime($fileName));
            $info["url"] = "http://localhost/php7/dir/". str_replace("\\",'/',$fileName) ;
            
            array_push($data, $info);

        }
    }

    echo json_encode($data);
?>