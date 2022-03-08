@extends('layout.default')

@section('pageTitle', 'NEW COMIC')

@section('mainContent')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        
        <div>
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div>
            <label class="form-label">Description</label>
            <input type="description" class="form-control" name="description">
        </div>

        <div>
            <label class="form-label">Thumb</label>
            <input type="description" class="form-control" name="thumb">
        </div>

        <div>
            <label class="form-label">Price</label>
            <input type="number" step="any" class="form-control" name="price">
        </div>

        <div>
            <label class="form-label">Series</label>
            <input type="text" class="form-control" name="series">
        </div>

        <div>
            <label class="form-label">Sale_date</label>
            <input type="text" class="form-control" name="sale_date">
        </div>

        <div>
            <label class="form-label">Type</label>
            <input type="text" class="form-control" name="type">
        </div>

        <div>
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection