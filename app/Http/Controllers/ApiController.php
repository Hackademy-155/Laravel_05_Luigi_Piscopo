<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexApi()
    {
        return [

            [
                'id' => 1,
                'name' => 'giuseppe',
                'surname' => 'bianchi',
                'age' => 39,
                'img' => '/img/giuseppe.jpg'
            ],
            [
                'id' => 2,
                'name' => 'mario',
                'surname' => 'rossi',
                'age' => 49,
                'img' => '/img/mario.jpg'
            ],
            [
                'id' => 3,
                'name' => 'fortunata',
                'surname' => 'sfortuna',
                'age' => 32,
                'img' => '/img/fortunata.jpg'
            ],
            [
                'id' => 4,
                'name' => 'katia',
                'surname' => 'rodriguez',
                'age' => 18,
                'img' => '/img/katia.jpg'
            ],
        ];
    }
}
