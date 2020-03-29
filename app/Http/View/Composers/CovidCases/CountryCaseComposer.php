<?php

namespace App\Http\View\Composers\CovidCases;

use App\Repositories\CovidCaseRepository;
use Illuminate\View\View;

class CountryCaseComposer
{
    /**
     * The countries covid case repository implementation
     * 
     * 
     */
    protected $countries;

    public function __construct(CovidCaseRepository $covidCaseRepository)
    {
        $this->countries = $covidCaseRepository->getCountries();
    }

    public function compose(View $view)
    {
        return $view->with('countries', $this->countries);
    }
}