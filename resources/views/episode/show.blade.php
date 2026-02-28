@extends('layouts/admin')


@section('title')
    {{$episode->name}}
@endsection


@section('main')
    
    <div class="container mt-4">
        
        <div class="buttons">
            <a class="back" href="{{ url('anime/'. $episode->anime->id ) }}">
                <i class="bi bi-arrow-left"></i>
            </a>

            <div>
                <a class="btn btn-outline-warning " href="{{ route('episode.edit', $episode)}}">Modifica</a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger " data-bs-toggle="modal" data-bs-target="#exampleModal{{ $episode['id'] }}">
                    Elimina
                </button>
            </div>
        </div>

        {{-- @dd($episode) --}}
        <div class="card bg-dark text-light d-flex">
            <div class="card-img-top">
                <img src="{{ asset('storage/' . $episode->cover) }}" alt="episode cover" width="100%">
            </div>
            <div class="p-3">
                <div class="d-flex justify-content-between">
                    
                    <h1> {{$episode->title}} </h1>
                    
                </div>

                <h5 class="mt-2"> Episodio {{$episode->number}} </h5>

                <h5 class="mt-2"> Durata episodio: {{$episode->duration}} min</h5>

            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{ $episode['id'] }}" tabindex="-1" aria-labelledby="exampleModal{{ $episode['id'] }}Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content text-light bg-dark">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModal{{ $episode['id'] }}Label">{{$episode->title}}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Elimina l'episodio
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                
                        <form action="{{ route('episode.destroy', $episode)}}" method="POST">
                
                            @csrf
                
                            @method('DELETE')
                
                
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                                                    
                    </div>
                </div>
            </div>
        </div>


    </div>

     <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $episode['id'] }}" tabindex="-1" aria-labelledby="exampleModal{{ $episode['id'] }}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-light bg-dark">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModal{{ $episode['id'] }}Label">{{$episode->name}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Elimina l'episode
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
            
                    <form action="{{ route('episode.destroy', $episode)}}" method="POST">
            
                        @csrf
            
                        @method('DELETE')
            
            
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                                                
                </div>
            </div>
        </div>
    </div>
    

@endsection