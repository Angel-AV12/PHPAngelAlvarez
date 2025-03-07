<?php

function basePath(string $path): string
{

    return dirname(__DIR__). '/' .$path;

}

function loadView(string $name)
{
    $layoutPath = basePath("Views/layout/main.layout.php");
    $viewPath = basePath('Views/${name}.view.php');
    
    if(file_exists($viewPath)){
        ob_start();
        require_once $viewPath;
        $content = ob_get_clean();
    }else{
        echo "La vista {$name} no existe.";
    }
    
    if(file_exists($layoutPath)){
        require_once $layoutPath;
    }else{
        echo "La vista {$name} no existe.";
    }
}

function dump(mixed $value): void
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

function dd(mixed $value):void
{
    dump($value);    
    die();
}