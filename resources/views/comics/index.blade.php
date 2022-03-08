@extends('layout.default')

@section('pageTitle', 'FULL LIST')

@section('mainContent')
    <table class="table">
        <thead>
            <tr>
                <th>title</th>
                <th>price</th>
                <th>sale_date</th>
                <th>type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dati as $comic)
                <tr>
                    <th>{{ $comic->title }}</th>
                    <th>{{ $comic->price }}</th>
                    <th>{{ $comic->sale_date }}</th>
                    <th>{{ $comic->type }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection