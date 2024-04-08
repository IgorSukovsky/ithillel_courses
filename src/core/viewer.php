<?php

namespace App\core;

class viewer
{
    public static function view(string $folder, string $name, array $data = []): void
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . $name . ".php";
        include_once $path;
    }

}