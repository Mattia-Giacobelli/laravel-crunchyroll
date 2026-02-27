@extends('layouts/admin')


@section('title')
    {{$type->name}}
@endsection


@section('main')
    
    <div class="container mt-4">
        
        <div class="buttons">
            <a class="back" href="{{ url('type') }}">
                <i class="bi bi-arrow-left"></i>
            </a>

            <div>
                <a class="btn btn-outline-warning " href="{{ route('type.edit', $type)}}">Modifica</a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger " data-bs-toggle="modal" data-bs-target="#exampleModal{{ $type['id'] }}">
                    Elimina
                </button>
            </div>
        </div>

        {{-- @dd($type) --}}
        <div class="card bg-dark text-light d-flex">

            <div class="p-3">
                <div class="d-flex justify-content-between">
                    
                    <h1> {{$type->name}} </h1>

                </div>

                
            </div>
        </div>

    </div>

     <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $type['id'] }}" tabindex="-1" aria-labelledby="exampleModal{{ $type['id'] }}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-light bg-dark">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModal{{ $type['id'] }}Label">{{$type->name}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Elimina l'anime
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
            
                    <form action="{{ route('type.destroy', $type)}}" method="POST">
            
                        @csrf
            
                        @method('DELETE')
            
            
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                                                
                </div>
            </div>
        </div>
    </div>
    

@endsection