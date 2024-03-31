<?php

namespace App\core;

final class router
{
    public function run()
    {
        $var = str_replace("/", "", $_SERVER['REQUEST_URI']);
        $constPath = "App\controllers\\";
        $path = $constPath . (empty($var) ? 'home' : $var);
        if (!class_exists($path)) {
            $path = $constPath . 'error';
        }
        $controller = new $path;
        $controller->index();
    }
}