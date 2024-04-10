<?php

namespace App\controllers;
use App\core\viewer;
use App\models\posts;


class home
{
    public function index()
    {
        $model = new posts();
        $data['posts'] = $model->findOne(1);
        viewer::view('home','home_index', $data);
    }
}
