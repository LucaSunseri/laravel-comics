@extends('layouts.app')
@section('content')

    <main class="home">
        <div class="container">

            <div class="title">
                <h2>CURRENT SERIES</h2>
            </div>

            <div class="series">
                @foreach ($comics as $comic)
                    <div class="card">
                        <div class="card__img">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        </div>
                        <div class="card__text">
                            <p>{{ $comic['series'] }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="button">
                <span>LOAD MORE</span>
            </div>

        </div>
    </main>
    <div class="menu-shop">
        <div class="container">

            @foreach ($items as $item)
                <div class="box">
                    <img src="{{ asset('img') }}/{{ $item['logo'] }}" alt="{{ $item['name'] }}">
                    <span>{{ $item['name'] }}</span>
                </div>
            @endforeach

        </div>
    </div>

@endsection
