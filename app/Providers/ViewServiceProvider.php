<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer(
            [
                'covid-cases.overall',
                'covid-cases.countries'
            ],
            'App\Http\View\Composers\CovidCases\OverallCaseComposer'
        );

        View::composer(
            'covid-cases.countries', 'App\Http\View\Composers\CovidCases\CountryCaseComposer'
        );
    }
}