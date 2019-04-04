<?php
    //$file = fopen("log.txt","w+"); //w+ verifica se existe o arquivo, se não existir ele cria e abre para escrita e zera o conteudo do arquivo
    $file = fopen("log.txt","a+");  //verifica se existe o arquivo, se não existir ele cria e abre para escrita e adiciona mais informação, move o ponteiro para o final do arquivo
    fwrite($file, "Deu certo" ."\r\n");
    
    fclose($file);

    echo "Arquivo criado com sucesso!";
?>