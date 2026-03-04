@extends('layouts.admin')
@section('main')

<div class="jumbotron p-5 mb-4 bg-dark text-white rounded-3">
    <div class="container py-5">
        <div class="logo_laravel">
            <img src="{{ asset('storage' . '/logo/logo.png')}}" alt="">
        </div>
        <h1 class="display-5 fw-bold">
            Benvenuto nel backoffice di Crunchyroll  <i class="bi bi-box"></i>
        </h1>

        <p class="col-md-8 fs-4">
            Gestisci il tuo database 
        </p>
        
</div>


@endsection