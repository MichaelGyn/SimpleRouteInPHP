<?php

require __DIR__.'/vendor/autoload.php';

$path = $_SERVER['PATH_INFO'] ?? '/';

$router = new SON\Router\Router($path, 'GET');


$router->get('/', function($params) {
    return 'home';
});

$router->get('/blog', function() {
    return 'Blog do site';
});

$router->get('/blog/{id}/{title:([a-zA-Z]+)}', function() {
    return 'artigo com id';
});



