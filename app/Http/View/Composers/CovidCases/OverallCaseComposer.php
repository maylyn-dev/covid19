<?php

namespace App\Http\View\Composers\CovidCases;

use App\Repositories\CovidCaseRepository;
use Illuminate\View\View;
use Carbon\Carbon;
use DateTime;

class OverallCaseComposer
{
    /**
     * The overall covid case repository implementation
     * 
     * 
     */
    protected $overall;

    public function __construct(CovidCaseRepository $covidCaseRepository)
    {
        $this->overall = $covidCaseRepository->getOverallCases();
    }

    public function compose(View $view)
    {
        $epoch = $this->overall['updated'] / 1000;
        $this->overall['updated'] = gmdate('r', $epoch);
        return $view->with('overall', $this->overall);
    }
}