<?php
    require_once('vendor/autoload.php');

    use Rain\Tpl;

    $config = array(
        "tpl_dir"       => "templates/",
        "cache_dir"     => "cache/"
    );
    Tpl::configure( $config );
    // create the Tpl object
    $tpl = new Tpl;
    // assign a variable
    $tpl->assign( "name", "Marcelo Abrão da Silva" );
    $tpl->assign( "version", PHP_VERSION );
    // assign an array
 //   $tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );
    // draw the template
    $tpl->draw( "index" );
?>