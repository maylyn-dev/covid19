@extends('layouts.app')

@section('content')
    <div class="text-center my-3">
        <div class="btn-group" role="group" aria-label="Cases Navigation">
            <a type="button" class="btn {{ Request::is('cases/overall') ? 'btn-primary' : 'btn-light' }}" href="{{ url('/cases/overall') }}">Global Totals</a>
            <a type="button" class="btn {{ Request::is('cases/countries') ? 'btn-primary' : 'btn-light' }}" href="{{ url('/cases/countries?sortBy=cases') }}">Totals Per Country</a>
        </div>
    </div>

    <div class="text-center mb-3">
        <small>Last Updated: {{ $overall['updated'] }}</small>
    </div>

    <div class="row mb-3">
        <div class="col-md-12">
            <small>Sort by: </small>
            <a href="{{ url('/cases/countries?sortBy=country') }}" class="badge {{ url('/cases/countries?sortBy=country') ? 'badge-primary' : 'badge-secondary' }}">Country</a>
            <a href="{{ url('/cases/countries?sortBy=cases') }}" class="badge {{ url('/cases/countries?sortBy=cases') ? 'badge-primary' : 'badge-secondary' }}">Total Cases</a>
            <a href="{{ url('/cases/countries?sortBy=todayCases') }}" class="badge {{ url('/cases/countries?sortBy=todayCases') ? 'badge-primary' : 'badge-secondary' }}">Cases Today</a>
            <a href="{{ url('/cases/countries?sortBy=deaths') }}" class="badge {{ url('/cases/countries?sortBy=deaths') ? 'badge-primary' : 'badge-secondary' }}">Total Deaths</a>
            <a href="{{ url('/cases/countries?sortBy=todaydeaths') }}" class="badge {{ url('/cases/countries?sortBy=todaydeaths') ? 'badge-primary' : 'badge-secondary' }}">Deaths Today</a>
            <a href="{{ url('/cases/countries?sortBy=recovered') }}" class="badge {{ url('/cases/countries?sortBy=recovered') ? 'badge-primary' : 'badge-secondary' }}">Recovered</a>
            <a href="{{ url('/cases/countries?sortBy=active') }}" class="badge {{ url('/cases/countries?sortBy=active') ? 'badge-primary' : 'badge-secondary' }}">Active</a>
            <a href="{{ url('/cases/countries?sortBy=critical') }}" class="badge {{ url('/cases/countries?sortBy=critical') ? 'badge-primary' : 'badge-secondary' }}">Critical</a>
            <a href="{{ url('/cases/countries?sortBy=casesPerOneMillion') }}" class="badge {{ url('/cases/countries?sortBy=casesPerOneMillion') ? 'badge-primary' : 'badge-secondary' }}">Cases / Million</a>
            <a href="{{ url('/cases/countries?sortBy=deathsPerOneMillion') }}" class="badge {{ url('/cases/countries?sortBy=deathsPerOneMillion') ? 'badge-primary' : 'badge-secondary' }}">Deaths / Million</a>
        </div>
    </div>

    @foreach(array_chunk($countries, 4) as $chunk)
    <div class="row mb-3">
        @foreach($chunk as $data)
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-inline-flex align-items-center">
                        <img src="{{ $data['countryInfo']['flag'] }}" class="pr-2" width="55px;" height="25px;">
                        <h4 style="margin:0;">{{ $data['country'] }}</h4>
                    </div>
                    <div class="card-text">Total Cases: <span class="badge badge-primary">{{ number_format($data['cases']) }}</span></div>
                    <div class="card-text">Cases Today: <span class="badge badge-light">{{ number_format($data['todayCases']) }}</span></div>
                    <div class="card-text">Total Deaths: <span class="badge badge-danger">{{ number_format($data['deaths']) }}</span></div>
                    <div class="card-text">Deaths Today: <span class="badge badge-light">{{ number_format($data['todayDeaths']) }}</span></div>
                    <div class="card-text">Recovered: <span class="badge badge-success">{{ number_format($data['recovered']) }}</span></div>
                    <div class="card-text">Active: <span class="badge badge-warning">{{ number_format($data['active']) }}</span></div>
                    <div class="card-text">Critical: <span class="badge badge-light">{{ number_format($data['critical']) }}</span></div>
                    <div class="card-text">Cases / Million: <span class="badge badge-light">{{ number_format($data['casesPerOneMillion']) }}</span></div>
                    <div class="card-text">Deaths / Million: <span class="badge badge-light">{{ number_format($data['deathsPerOneMillion']) }}</span></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
@endsection()