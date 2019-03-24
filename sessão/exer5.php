<?php
    session_id('027lohklpp00filuvgcdch76db');

    require_once('config.php');

    session_regenerate_id();

    echo session_id();

    var_dump($_SESSION);
?>