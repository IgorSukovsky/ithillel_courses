<?php

namespace App\controllers;
use App\core\viewer;

class home
{
    public function index()
    {
        viewer::view('home','home_index');
    }
}
