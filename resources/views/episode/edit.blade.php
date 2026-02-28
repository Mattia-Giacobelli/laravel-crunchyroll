@extends('layouts/admin')


@section('title')
    Modifica un Episodio
@endsection


@section('main')

    <div class="container mt-5">

        <div class="buttons">
            <a class="back" href="{{ url()->previous() }}">
                <i class="bi bi-arrow-left"></i>
            </a>

        </div>

        <form action="{{ route('episode.update', $episode) }}" method="POST" enctype="multipart/form-data" data-bs-theme="dark">

            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$episode->title}}">
            </div>

            <div class="mb-3">
                <label for="number" class="form-label">Numero episodio</label>
                <input type="number" class="form-control" id="number" name="number"
                value="{{$episode->number}}">
            </div>


            <div class="mb-3">
                <label for="cover" class="form-label">Copertina</label>
                
                <div class="d-flex align-items-center justify-content-between form-control">
                    <input type="file"  id="cover" name="cover">

                    @if ($episode->cover != '')
                        <img src="{{ asset('storage/' . $episode->cover) }}" class="cover-fluid w-25" alt="copertina">
                    @endif
                    
                </div>
                
            </div>

            <div class="mb-3">
                <label for="plot" class="form-label">Trama in breve</label>
                <textarea class="form-control" id="plot" name="plot"> {{$episode->plot}} </textarea>
            </div>


            <div class="mb-3">
                <label for="duration" class="form-label">Durata episodio</label>
                <input type="number" class="form-control" id="duration" name="duration"
                value="{{$episode->duration}}" min="20" max="1000">
            </div>

            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>

    </div>

@endsection