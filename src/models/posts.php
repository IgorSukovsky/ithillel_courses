<?php

namespace App\models;

class posts extends model
{
    protected array $model =
      [
          [
              'id' => '1',
              'name' => 'Test post1'
          ]
      ];
    protected array $models =
        [
            [
                'id' => '1',
                'name' => 'Test post1'
            ],
            [
                'id' => '2',
                'name' => 'Test post2'
            ]
        ];
}