@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<header>
    <h1 class="text-center">
        Welcome to the Comics Site!
    </h1>

    <div class="text-center">
        <a href="{{ route('comics.index') }}" class="btn btn-danger fw-bolder">
            Access to Comics!
        </a>    
    </div>
</header>
@endsection
