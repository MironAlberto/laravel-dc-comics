@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<h1 class="text-center pt-2">
    Welcome to Comics!
</h1>

<div class="d-flex justify-content-end pb-3 pe-3">
    <a href="{{ route('comics.create') }}" class="btn btn-danger fw-bolder">
        + ADD Comics
    </a>
</div>

<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-4">
                <div class="cards">
                    <div class="card my-card mb-4 text-center text-white bg-dark">
                        <div class="card-body">
                            <h4 class="fw-bolder">
                                Comic Title:
                            </h4>
                            <h2 class="card-title fw-bolder text-danger">
                                 {{ $comic->title }}
                            </h2>
                            <p class="card-text">
                                <div class="fw-bolder">
                                    Comic Price:
                                </div> 
                                <strong class="fw-bolder text-danger">
                                    ${{ $comic->price }}
                                </strong>
                            </p>
                            <p class="card-text">
                                <div class="fw-bolder">
                                    Comic Series:
                                </div>  
                                <strong class="fw-bolder text-danger">
                                    {{ $comic->series }}
                                </strong>
                            </p>
                            <p class="card-text">
                                <div class="fw-bolder">
                                    Sale Date:
                                </div>  
                                <strong class="fw-bolder text-danger">
                                    {{ $comic->sale_date }}
                                </strong>
                            </p>
                            <div class="mb-3">
                                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-light fw-bolder w-100">
                                    More Details
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning fw-bolder text-white w-100">
                                    Update
                                </a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection