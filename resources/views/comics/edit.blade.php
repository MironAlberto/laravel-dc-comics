@extends('layouts.app')

@section('page-title', 'Edit '.$comic->title)

@section('main-content')
<div class="d-flex justify-content-end pt-3">
    <a href="{{ route('comics.index') }}" class="btn btn-danger fw-bolder">
        <- Back to the comics
    </a>
</div>
<h1>
    Edit {{ $comic->title }}
</h1>

<div class="row">
    <div class="col py-4">
        {{-- reindirizzamento ad update, ricordarsi di usare method PUT --}}
        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST"> 
            @csrf

            {{-- grazie a blade, utilizzo il method PUT - altrimenti ritornerei a store --}}
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input value="{{ old('title', $comic->title) }}" type="text" class="form-control" @error('title') is-invalid @enderror id="title" name="title" placeholder="Add your updated Comic Title..." maxlength="64" required>
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" @error('description') is-invalid @enderror id="description" name="description" rows="3" placeholder="Add your updated Comic Description...">{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input value="{{ old('thumb', $comic->thumb) }}" type="text" class="form-control" @error('thumb') is-invalid @enderror id="thumb" name="thumb" placeholder="Add your updated Comic Thumb..." maxlength="1024">
                @error('thumb')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                <input type="number" value="{{ old('price', $comic->price) }}" class="form-control" @error('price') is-invalid @enderror id="price" name="price" placeholder="Add your updated Comic Price..." step="0.01" min="3" max="100" required>
                @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input value="{{ old('series', $comic->series) }}" type="text" class="form-control" @error('series') is-invalid @enderror id="series" name="series" placeholder="Add your updated Comic Series..." max="64">
                @error('series')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date <span class="text-danger">*</span></label>
                <input type="date" value="{{ old('date', $comic->date) }}" class="form-control" @error('date') is-invalid @enderror id="date" name="sale_date" placeholder="Add your updated Comic Date..." required>
                @error('date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input value="{{ old('type', $comic->type) }}" type="text" class="form-control" @error('type') is-invalid @enderror id="type" name="type" placeholder="Add your updated Comic Type..." max="16">
                @error('type')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-danger w-100">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection