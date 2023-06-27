@extends('layouts.app')

@section('page-title', 'DC COMICS')

@section('content')

    <div class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="JUMBOTRON">
    </div>

    <div class="main-content-wrapper">
        <div class="container">

            <div class="cards-container d-flex flex-wrap justify-content-center pos-relative">
                <span class="cards-container-tag pos-absolute">CURRENT SERIES</span>
                
                    @foreach ($comicsArray as $comic)
                    <div class="card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <figcaption>{{ $comic['title'] }}</figcaption>
                    </div>
                    @endforeach
                
        
            </div>
        
            <button>LOAD MORE</button>

        </div>
    </div>


@endsection