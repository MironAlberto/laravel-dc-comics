@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
    <div class="d-flex justify-content-end pt-3 pe-3">
        <a href="{{ route('comics.index') }}" class="btn btn-danger fw-bolder">
            <- Back to the comics
        </a>
    </div>

    <h1 class="text-center mb-4">
        {{ $comic->title }}
    </h1>

    <div class="container d-flex justify-content-around">
        <div class="row">
            <div class="col">
                <div class="left-image">
                    <div class="img-box">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="right-infos">
                    <div class="show-card card mb-4 text-center text-white bg-dark">
                        <div class="card-body">
                            <h2 class="card-title fw-bolder text-danger">
                                 {{ $comic->series }}
                            </h2>
                            <p class="card-text">
                                <div class="fw-bolder">
                                    Comic Type:
                                </div>  
                                <strong class="fw-bolder text-danger">
                                    {{ $comic->type }}
                                </strong>
                            </p>
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
                                    Sale Date:
                                </div> 
                                <strong class="fw-bolder text-danger">
                                    {{ $comic->sale_date }}
                                </strong>
                            </p>
                            <p class="card-text">
                                <div class="fw-bolder">
                                    Description:
                                </div> 
                                <strong class="fw-bolder text-danger">
                                    {{ $comic->description }}
                                </strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection