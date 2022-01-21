@extends('layouts.app')
@section('content')

    <main>
        <div class="container">

            <div class="title">
                <h2>CURRENT SERIES</h2>
            </div>

            <div class="series">
                <div class="card">
                    <div class="card__img">
                        <h1>Inserire le immagini</h1>
                        {{-- <img :src="contentCard.thumb" :alt="contentCard.series"> --}}
                    </div>
                    <div class="card__text">
                        <h1>Inserire i testi</h1>
                        {{-- <p>{{ contentCard . series }}</p> --}}
                    </div>
                </div>
            </div>

            <div class="button">
                <span>LOAD MORE</span>
            </div>

        </div>
    </main>

@endsection
