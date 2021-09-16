<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class apiController extends Controller
{
    public function getData($name){
    $client = new Client();

    $response = $client->request('GET','https://api.agify.io/',[
        'query' =>[
            'name' => $name
        ]
    ]);

    return $response;
    }
}
