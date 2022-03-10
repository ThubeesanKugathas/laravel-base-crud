@extends('layout.default')

@section('pageTitle', 'NEW COMIC')

@section('mainContent')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        
        <div>
            <label class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" 
            name="title" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label class="form-label">Description</label>
            <input type="description" class="form-control @error('description') is-invalid @enderror"
            name="description" value="{{ old('description') }}">
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label class="form-label">Thumb</label>
            <input type="description" class="form-control @error('thumb') is-invalid @enderror" 
            name="thumb" value="{{ old('thumb') }}">
            @error('thumb')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label class="form-label">Price</label>
            <input type="number" step="any" class="form-control @error('price') is-invalid @enderror" 
            name="price" value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label class="form-label">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror"
            name="series" value="{{ old('series') }}">
            @error('series')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label class="form-label">Sale_date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror"
            name="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" 
            name="type" value="{{ old('type') }}">
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection