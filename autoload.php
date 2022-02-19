<?php

session_start();

require_once './bootstrap.php';

spl_autoload_register('autoload');

function autoload($class_name){
    $array_paths = array(
        'database/',
        'app/classes/',
        'models/',
        'controllers/'
    );

    $parts = explode('\\',$class_name);
    // array_pop deletes the last element of []
    $name = array_pop($parts);

    foreach($array_paths as $path){
        // sprintf() replace % by a variable passed as an argument
        $file = sprintf($path.'%s.php', $name);
        if(is_file($file)){
            include_once $file;
        }
    }
}

?>
