@extends('layouts/admin')


@section('title')
    Aggiungi un Anime
@endsection


@section('main')

    <div class="container mt-5">

        <div class="buttons">
            <a class="back" href="{{ url()->previous() }}">
                <i class="bi bi-arrow-left"></i>
            </a>

        </div>

        <form action="{{ route('anime.store') }}" method="POST" enctype="multipart/form-data" data-bs-theme="dark">

            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="original_name" class="form-label">Titolo originale</label>
                <input type="text" class="form-control" id="original_name" name="original_name">
            </div>

            <div class="mb-3">
                <label for="type_id" class="form-label">Tipologia</label>
                <select class="form-select" id="type_id" name="type_id"> 

                    @foreach ($types as $type)
                        
                        <option value="{{ $type->id }}"> {{ $type->name }} </option>

                    @endforeach
                    
                </select>
            </div>

            <div class="mb-3">
                <label for="animation_studio_id" class="form-label">Studio di animazione</label>
                <select class="form-select" id="animation_studio_id" name="animation_studio_id"> 

                    @foreach ($studios as $studio)
                        
                        <option value="{{ $studio->id }}"> {{ $studio->name }} </option>

                    @endforeach
                    
                </select>
            </div>

            {{-- @dd($technologies) --}}

            <span class="d-block mb-2">Generi</span>
            
            @foreach ($genres as $genre)
            
                <div class="form-check form-check-inline mb-3">
                    <input name="genres[]" value="{{ $genre->id }}" class="form-check-input" type="checkbox" id="genre{{ $genre->id }}">
                    <label class="form-check-label" for="genre{{ $genre->id }}"> {{ $genre->name }} </label>
                </div>

            @endforeach

            <span class="d-block mb-2">Lingue doppiaggio</span>
            
            @foreach ($dubs as $dub)
            
                <div class="form-check form-check-inline mb-3">
                    <input name="dubs[]" value="{{ $dub->id }}" class="form-check-input" type="checkbox" id="dub{{ $dub->id }}">
                    <label class="form-check-label" for="dub{{ $dub->id }}"> {{ $dub->language }} </label>
                </div>

            @endforeach

            <span class="d-block mb-2">Lingue sottotitoli</span>
            
            @foreach ($subs as $sub)
            
                <div class="form-check form-check-inline mb-3">
                    <input name="subs[]" value="{{ $sub->id }}" class="form-check-input" type="checkbox" id="sub{{ $sub->id }}">
                    <label class="form-check-label" for="sub{{ $sub->id }}"> {{ $sub->language }} </label>
                </div>

            @endforeach


            <div class="mb-3">
                <label for="cover" class="form-label">Copertina</label>
                <input type="file" class="form-control" id="cover" name="cover">
            </div>

            <div class="mb-3">
                <label for="plot" class="form-label">Trama in breve</label>
                <textarea class="form-control" id="plot" name="plot"> </textarea>
            </div>

            <div class="mb-3">
                <label for="episodes" class="form-label">Numero di episodi</label>
                <input type="number" class="form-control" id="episodes" name="episodes" min="1" max="10000">
            </div>

            <div class="mb-3">
                <label for="episodes_duration" class="form-label">Durata media episodi in minuti</label>
                <input type="number" class="form-control" id="episodes_duration" name="episodes_duration" min="1" max="1000">
            </div>

            <div class="mb-3">
                <label for="vote" class="form-label">Voto /10</label>
                <input type="number" class="form-control" id="vote" name="vote" min="1" max="10">
            </div>

            <div class="mb-3">
                <label for="release_date" class="form-label">Data di rilascio</label>
                <input type="date" class="form-control" id="release_date" name="release_date" min="1970-01-01" max="{{date('Y-m-d')}}">
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">Data di conclusione</label>
                <input type="date" class="form-control" id="end_date" name="end_date" min="1970-01-01" max="{{date('Y-m-d')}}">
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>

    </div>

@endsection