<?php 

require_once __DIR__ . '../Application/Core/helps.php';

$routes = require_once basePath('../Application/Core/routes.php');

$uri = $_SERVER['REQUEST_URI'];

if(array_key_exists($uri,$routes)){
    require_once basePath($routes[$uri]);
}else{
    http_response_code(404);
    require_once basePath($routes['404']);   
}