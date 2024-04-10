<?php

namespace App\models;

class users extends model
{
    protected array $model =
        [
            'id' => '1',
            'name' => 'Test user1'
        ];
    protected array $models =
        [
            [
                'id' => '1',
                'name' => 'Test user1'
            ],
            [
                'id' => '2',
                'name' => 'Test user2'
            ]
        ];
}