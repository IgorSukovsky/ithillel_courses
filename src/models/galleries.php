<?php

namespace App\models;

class galleries extends model
{
    protected array $model =
        [
            'id' => '1',
            'name' => 'Test gallery1'
        ];
    protected array $models =
        [
            [
                'id' => '1',
                'name' => 'Test gallery1'
            ],
            [
                'id' => '2',
                'name' => 'Test gallery2'
            ]
        ];
}