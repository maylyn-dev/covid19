<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NovelCovidApiController extends Controller
{
    public function getAll()
    {
        $url = 'https://corona.lmao.ninja/all';

        $response = Http::get($url);

        return $response;
    }
}
