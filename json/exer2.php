<?php
    $json = '[{"Nome":"Jo\u00e3o","idade":20},{"Nome":"Marcelo","idade":27},{"Nome":"Matheus","idade":18}]';

    $data = json_decode($json, true);
    var_dump($data);
?>