@extends('layouts/admin')


@section('title')
    Projects
@endsection


@section('main')
    
    <div class="container  mt-5">

        <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="{{ route('anime.create')}}">Aggiungi un progetto</a>
        </div>

        <table class="table table-striped mt-4 w-100">
            <thead>
                {{-- <th></th> --}}
                <th scope="col">Nome</th>
                <th scope="col">Tipologia</th>
                <th scope="col">Sudio</th>
                <th scope="col">Generi</th>
                <th scope="col">Lingue</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </thead>

            <tbody >

                @foreach ($animes as $anime)
                    {{-- {{$project->id}} --}}
                    <tr>
                        {{-- <td>
                            <img src="{{ Vite::asset($project['img']) }}" alt="scree">
                        </td> --}}

                        <td class="align-middle"><a href="{{route('anime.show', $anime['id'])}}">{{$anime['name']}}</a></td>
                        <td class="align-middle">{{$anime->type_id != null ? $anime->type->name : ''}}</td>
                        <td class="align-middle">{{$anime->animationStudio->name}}</td>
                        <td class="align-middle">
                            @for ($i = 0; $i < count($anime->genres); $i++)
                        
                            @if ($i == count($anime->genres) - 1)
                                {{ $anime->genres[$i]->name }}
                            @else
                                {{ $anime->genres[$i]->name }},
                            @endif

                    @endfor 
                        <td class="align-middle">
                            @for ($i = 0; $i < count($anime->dubs); $i++)
                        
                        @if ($i == count($anime->dubs) - 1)
                            {{ $anime->dubs[$i]->language }}
                        @else
                            {{ $anime->dubs[$i]->language }},
                        @endif

                    @endfor 
                        </td>

                        <td>
                            <a class="btn btn-outline-warning " href="{{ route('anime.edit', $anime)}}">Modifica</a>
                        </td>

                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-danger " data-bs-toggle="modal" data-bs-target="#exampleModal{{ $anime['id'] }}">
                                Elimina
                            </button>

                        </td>

                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $anime['id'] }}" tabindex="-1" aria-labelledby="exampleModal{{ $anime['id'] }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModal{{ $anime['id'] }}Label">{{$anime->name}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Elimina il progetto
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
            
                                    <form action="{{ route('anime.destroy', $anime)}}" method="POST">
            
                                        @csrf
            
                                        @method('DELETE')
            
            
                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                    </form>
                                                
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </tbody>
        </table>

    </div> 

@endsection