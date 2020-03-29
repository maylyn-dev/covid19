@extends('layouts.app')

@section('content')
    <div class="text-center my-3">
        <div class="btn-group" role="group" aria-label="Cases Navigation">
            <a type="button" class="btn {{ Request::is('cases/overall') ? 'btn-primary' : 'btn-light' }}" href="{{ url('/cases/overall') }}">Global Totals</a>
            <a type="button" class="btn {{ Request::is('cases/countries') ? 'btn-primary' : 'btn-light' }}" href="{{ url('/cases/countries?sortBy=cases') }}">Totals Per Country</a>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-10"><small>Last Updated: {{ $overall['updated'] }}</small></div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card mr-3">
                <div class="card-body">
                    <h5 class="card-title">Total Cases</h5>
                    <h3 class="card-text"><span class="badge badge-primary">{{ number_format($overall['cases']) }}</span></h3>
                    <!-- <p class="card-text"><small class="text-muted">Last updated: {{ $overall['updated'] }}</small></p> -->
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mx-3">
                <div class="card-body">
                    <h5 class="card-title">Deaths</h5>
                    <h3 class="card-text"><span class="badge badge-danger">{{ number_format($overall['deaths']) }}</span></h3>
                    <!-- <p class="card-text"><small class="text-muted">Last updated: {{ $overall['updated'] }}</small></p> -->
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mx-3">
                <div class="card-body">
                    <h5 class="card-title">Recovered</h5>
                    <h3 class="card-text"><span class="badge badge-success">{{ number_format($overall['recovered']) }}</span></h3>
                    <!-- <p class="card-text"><small class="text-muted">Last updated: {{ $overall['updated'] }}</small></p> -->
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card ml-3">
                <div class="card-body">
                    <h5 class="card-title">Active</h5>
                    <h3 class="card-text"><span class="badge badge-warning">{{ number_format($overall['active']) }}</span></h3>
                    <!-- <p class="card-text"><small class="text-muted">Last updated: {{ $overall['updated'] }}</small></p> -->
                </div>
            </div>
        </div>
    </div>
@endsection()