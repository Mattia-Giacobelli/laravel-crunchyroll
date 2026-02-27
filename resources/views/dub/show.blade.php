@extends('layouts/admin')


@section('title')
    {{$dub->language}}
@endsection


@section('main')
    
    <div class="container mt-4">
        
        <div class="buttons">
            <a class="back" href="{{ url('dub') }}">
                <i class="bi bi-arrow-left"></i>
            </a>

            <div>
                <a class="btn btn-outline-warning " href="{{ route('dub.edit', $dub)}}">Modifica</a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger " data-bs-toggle="modal" data-bs-target="#exampleModal{{ $dub['id'] }}">
                    Elimina
                </button>
            </div>
        </div>

        {{-- @dd($dub) --}}
        <div class="card bg-dark text-light d-flex">

            <div class="p-3">
                <div class="d-flex justify-content-between">
                    
                    <h1> Lang: {{$dub->language}} </h1>

                    <h1> Iso: {{$dub->iso_code}} </h1>

                </div>

                
            </div>
        </div>

    </div>

     <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $dub['id'] }}" tabindex="-1" aria-labelledby="exampleModal{{ $dub['id'] }}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-light bg-dark">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModal{{ $dub['id'] }}Label">{{$dub->language}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Elimina l'anime
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
            
                    <form action="{{ route('dub.destroy', $dub)}}" method="POST">
            
                        @csrf
            
                        @method('DELETE')
            
            
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                                                
                </div>
            </div>
        </div>
    </div>
    

@endsection