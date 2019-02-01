<?php

require __DIR__.'/vendor/autoload.php';

$route = new SON\Framework\Router;

// $route = $_SERVER['PATH_INFO'] ?? '/';

$route->add('/', function (){
    return 'estamos na homepage';
});

$route->add('/projects', function (){
    return 'estamos listando projetos';
});


echo $route->run();