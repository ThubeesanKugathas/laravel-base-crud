@extends('layout.default')

@section('pageTitle', 'NEW COMIC')

@section('mainContent')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        @method('put')
        
        <div>
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
        </div>

        <div>
            <label class="form-label">Description</label>
            <input type="description" class="form-control" name="description" value="{{ $comic->description }}">
        </div>

        <div>
            <label class="form-label">Thumb</label>
            <input type="description" class="form-control" name="thumb" value="{{ $comic->thumb }}">
        </div>

        <div>
            <label class="form-label">Price</label>
            <input type="number" step="any" class="form-control" name="price" value="{{ $comic->price }}">
        </div>

        <div>
            <label class="form-label">Series</label>
            <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
        </div>

        <div>
            <label class="form-label">Sale_date</label>
            <input type="text" class="form-control" name="sale_date" value="{{ $comic->sale_date }}">
        </div>

        <div>
            <label class="form-label">Type</label>
            <input type="text" class="form-control" name="type" value="{{ $comic->type }}">
        </div>

        <div>
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection