<?php

namespace App\Http\ExternalApiServices;

use Illuminate\Support\Facades\Http;

class NovelCovidApiService
{
    public function getAll()
    {
        $url = 'https://corona.lmao.ninja/all';

        $response = Http::get($url);

        return $response;
    }

    public function getCountries($sortBy)
    {
        $url = 'https://corona.lmao.ninja/countries?sort='.$sortBy;

        $response = Http::get($url);

        return $response;
    }
}