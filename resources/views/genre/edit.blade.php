@extends('layouts/admin')


@section('title')
    Modifica un Genere
@endsection


@section('main')

    <div class="container mt-5">

        <div class="buttons">
            <a class="back" href="{{ url()->previous() }}">
                <i class="bi bi-arrow-left"></i>
            </a>

        </div>

        <form action="{{ route('genre.update', $genre) }}" method="POST" enctype="multipart/form-data" data-bs-theme="dark">

            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $genre->name }}">
            </div>

            

            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>

    </div>

@endsection