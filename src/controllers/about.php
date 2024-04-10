<?php

namespace App\controllers;
use App\core\viewer;
use App\models\users;

class about
{
    public function index()
    {
        $model = new users();
        $data['users'] = $model->findAll();
        viewer::view('about','about_index', $data);
    }
}

