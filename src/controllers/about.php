<?php

namespace App\controllers;
use App\core\viewer;

class about
{
    public function index()
    {
        viewer::view('about','about_index');
    }
}

