@extends('layouts.app')

@section('page-title', 'New Comic')

@section('main-content')
<div class="d-flex justify-content-end pt-3">
    <a href="{{ route('comics.index') }}" class="btn btn-danger fw-bolder">
        <- Back to the comics
    </a>
</div>
<h1>
    Create your new Comic!
</h1>

<div class="row">
    <div class="col py-4">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" @error('title') is-invalid @enderror value="{{ old('title') }}" id="title" name="title" placeholder="Add your Comic Title..." maxlength="64" required>
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" @error('description') is-invalid @enderror id="description" name="description" maxlength="4000" rows="3" placeholder="Add your Comic Description...">{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" @error('thumb') is-invalid @enderror value="{{ old('thumb') }}" id="thumb" name="thumb" placeholder="Add your Comic Thumb..." maxlength="1024">
                @error('thumb')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                <input type="number" class="form-control" @error('price') is-invalid @enderror value="{{ old('price') }}" id="price" name="price" placeholder="Add your Comic Price..." step="0.01" min="3" max="10000" required>
                @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" @error('series') is-invalid @enderror value="{{ old('series') }}" id="series" name="series" placeholder="Add your Comic Series..." max="64">
                @error('series')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date <span class="text-danger">*</span></label>
                <input type="date" class="form-control" @error('date') is-invalid @enderror value="{{ old('date') }}" id="date" name="sale_date" placeholder="Add your Comic Date..." required>
                @error('date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" @error('type') is-invalid @enderror value="{{ old('type') }}" id="type" name="type" placeholder="Add your Comic Type..." max="16">
                @error('type')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-danger w-100">
                    + ADD
                </button>
            </div>
        </form>
    </div>
</div>
@endsection