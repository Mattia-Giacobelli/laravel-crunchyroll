@extends('layouts/admin')


@section('title')
    Aggiungi un Episodio
@endsection


@section('main')

    <div class="container mt-5">

        <div class="buttons">
            <a class="back" href="{{ url()->previous() }}">
                <i class="bi bi-arrow-left"></i>
            </a>

        </div>

        <form action="{{ route('anime.episode.store', $anime) }}" method="POST" enctype="multipart/form-data" data-bs-theme="dark">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="number" class="form-label">Numero episodio</label>
                <input type="number" class="form-control" id="number" name="number" min="{{$anime->episodes + 1}}">
            </div>


            <div class="mb-3">
                <label for="cover" class="form-label">Copertina</label>
                <input type="file" class="form-control" id="cover" name="cover">
            </div>

            <div class="mb-3">
                <label for="plot" class="form-label">Trama in breve</label>
                <textarea class="form-control" id="plot" name="plot"> </textarea>
            </div>


            <div class="mb-3">
                <label for="duration" class="form-label">Durata episodio</label>
                <input type="number" class="form-control" id="duration" name="duration" min="20" max="1000">
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>

    </div>

@endsection