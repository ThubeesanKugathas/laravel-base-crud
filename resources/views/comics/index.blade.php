@extends('layout.default')

@section('pageTitle', 'FULL LIST')

@section('mainContent')
    <main>
        <div class="ms_main-one d-flex mx-auto justify-content-around flex-wrap position-relative">
            @foreach ($dati as $comic)
                <div class="ms_comics-card">
                    <div class="ms_card-image">
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        </a>
                    </div>
                    <p>{{ $comic->series }}</p>
                </div>
            @endforeach
        </div>

        <span id="main-one-span" class="mx-auto d-table">
            <a href="{{ route('comics.create') }}">ADD NEW COMIC</a>
        </span>
    </main>
@endsection