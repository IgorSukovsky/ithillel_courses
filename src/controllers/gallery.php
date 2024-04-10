<?php

namespace App\controllers;
use App\core\viewer;
use App\models\galleries;


class gallery
{
    public function index()
    {
        $model = new galleries();
        $data['galleries'] = $model->findAll();
        viewer::view('gallery','gallery_index', $data);
    }

    public function create()
    {
        viewer::view('gallery','gallery_create');
    }
    public function update()
    {
        viewer::view('gallery','gallery_update');
    }
    public function delete()
    {
        viewer::view('gallery','gallery_delete');
    }
}