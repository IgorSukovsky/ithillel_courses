<?php

namespace App\core;

final class router
{
    public function run()
    {
        $var = [];
        $url = (empty($_SERVER['REQUEST_URI']) ? '/' : $_SERVER['REQUEST_URI']);
        $config = include_once __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "common.php";
        if (array_key_exists($url, $config)) {
            $var = explode(':', $config[$url]);
        }

        $constPath = "App\controllers\\";
        $path = $constPath . (empty($var[0]) ? 'error' : $var[0]);
        if (!class_exists($path)) {
            $path = $constPath . 'error';
        }

        $controller = new $path;
        $method = (empty($var[1]) ? 'index' : $var[1]);
        if (!method_exists($controller, $method)) {
            $path = $constPath . 'error';
            $controller = new $path;
        }
        $controller->$method();
    }
}



