@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
    <div class="d-flex justify-content-between pt-3 pe-3">
        <a href="{{ route('comics.index') }}" class="btn btn-dark fw-bolder">
            <- Back to the comics
        </a>
    
        <button type="button" class="btn btn-danger fw-bolder" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Delete the Comic
        </button>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><span class="text-danger">Deleting</span> the Comic {{ $comic->title }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete  {{ $comic->title }}?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
                        <form 
                            action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                            method="POST"
                            {{-- metodo per richiedere conferma direttamente da backend ↓ --}}
                            {{-- onsubmit="return confirm('Are you sure you want to delete {{ $comic->title }}?')" --}}>
                            @csrf

                            {{-- aggiungo tramite blade il method DELETE così da non reindirizzarmi a SHOW --}}
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger fw-bolder">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-center mb-4">
        {{ $comic->title }}
    </h1>

    <div id="carouselExampleIndicators" class="carousel slide"  data-bs-theme="dark">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active img-box">
                <img src="{{ $comic->thumb }}" class="" alt="{{ $comic->title }}">
            </div>
            <div class="carousel-item">
                <div>
                    <div class="show-card card text-center text-white bg-dark border-0">
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
        <button class="carousel-control-prev btn-primary" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="">Next</span>
        </button>
    </div>
@endsection