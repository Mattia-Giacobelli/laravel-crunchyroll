@extends('layouts/admin')


@section('title')
    Aggiungi una Lingua
@endsection


@section('main')

    <div class="container mt-5">

        <div class="buttons">
            <a class="back" href="{{ url()->previous() }}">
                <i class="bi bi-arrow-left"></i>
            </a>

        </div>

        <form action="{{ route('sub.store') }}" method="POST" enctype="multipart/form-data" data-bs-theme="dark">

            @csrf

            <div class="mb-3">
                <label for="language" class="form-label">Lingua</label>
                <input type="text" class="form-control" id="language" name="language">
            </div>

            <div class="mb-3">
                <label for="iso_code" class="form-label">Iso code</label>
                <input type="text" class="form-control" id="iso_code" name="iso_code">
            </div>

            

            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>

    </div>

@endsection