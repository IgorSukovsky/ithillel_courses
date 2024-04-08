<?php

namespace App\controllers;

class error
{
    public function index()
    {
//        echo 'error';
        http_response_code(404);
        echo '404 Page Not Found';
    }
}

