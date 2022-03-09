@extends('layout.default')

@section('pageTitle', 'DETAILS')

@section('mainContent')
    <h1>{{ $comic->title }}</h1>
    <div class="d-flex">
        <img class="me-4" src="{{ $comic->thumb }}" alt="image">
        <div>
            <ul>
                <li>Price: {{ $comic->price }}</li>
                <li>Series: {{ $comic->series }}</li> 
                <li>Sale-Date: {{ $comic->sale_date }}</li>
                <li>Type: {{ $comic->type }}</li>
            </ul>
        </div>
    </div>
    <div class="">
        <a href="{{ route('comics.edit', $comic->id) }}">Change</a>
        @include('partials.deleteLink', [
            "route" => 'comics.destroy',
            "id" => $comic->id
        ])
    </div>
@endsection