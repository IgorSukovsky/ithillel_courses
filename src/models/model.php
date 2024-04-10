<?php

namespace App\models;

abstract class model
{
    public function findOne(int $id):array
    {
        return $this->model;
    }

    public function findAll():array
    {
        return $this->models;
    }

}