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
                <input type="text" class="form-control" id="title" name="title" placeholder="Add your Comic Title..." maxlength="64" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Add your Comic Description..."></textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Add your Comic Thumb..." maxlength="1024">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Add your Comic Price..." step="0.01" min="3" max="100" required>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Add your Comic Series..." max="64">
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date <span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="date" name="sale_date" placeholder="Add your Comic Date..." required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Add your Comic Type..." max="16">
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