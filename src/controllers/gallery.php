<?php

namespace App\controllers;
use App\core\viewer;

class gallery
{
    public function index()
    {
        viewer::view('gallery','gallery_index');
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