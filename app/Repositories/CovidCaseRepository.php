<?php

namespace App\Repositories;

use App\Http\ExternalApiServices\NovelCovidApiService;
use Request;

class CovidCaseRepository
{
    protected $novelCovidApiService;

    public function __construct()
    {
        $this->novelCovidApiService = new NovelCovidApiService;
    }

    public function getOverallCases()
    {
        $overall = $this->novelCovidApiService->getAll();
        return $overall->json();
    }

    public function getCountries()
    {
        $sortBy = Request::query('sortBy');
        $countries = $this->novelCovidApiService->getCountries($sortBy);
        return $countries->json();
    }
}