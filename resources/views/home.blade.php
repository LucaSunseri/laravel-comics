@extends('layouts.app')
@section('content')

    <main>
        <div class="container">

            <div class="title">
                <h2>CURRENT SERIES</h2>
            </div>

            <div class="series">
                @foreach (config('comics') as $comic)
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

            @foreach (config('databaseMenuShop') as $m_shop)
                <div class="box">
                    <img src="{{ asset('img') }}/{{ $m_shop['logo'] }}" alt="{{ $m_shop['name'] }}">
                    <span>{{ $m_shop['name'] }}</span>
                </div>
            @endforeach

        </div>
    </div>

@endsection
