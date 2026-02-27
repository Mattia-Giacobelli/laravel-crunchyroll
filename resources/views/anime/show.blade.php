@extends('layouts/admin')


@section('title')
    {{$anime->name}}
@endsection


@section('main')
    
    <div class="container mt-4">
        
        <div class="buttons">
            <a class="back" href="{{ url('anime') }}">
                <i class="bi bi-arrow-left"></i>
            </a>

            <div>
                <a class="btn btn-outline-warning " href="{{ route('anime.edit', $anime)}}">Modifica</a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger " data-bs-toggle="modal" data-bs-target="#exampleModal{{ $anime['id'] }}">
                    Elimina
                </button>
            </div>
        </div>

        {{-- @dd($anime) --}}
        <div class="card bg-dark text-light d-flex">
            <div class="card-img-top">
                <img src="{{ asset('storage/' . $anime->cover) }}" alt="Anime cover" width="100%">
            </div>
            <div class="p-3">
                <div class="d-flex justify-content-between">
                    
                    <h1> {{$anime->name}} </h1>

                    <h2> {{$anime->type->name}} </h2>
                    {{-- @dd($anime) --}}
                    
                </div>

                <h2> 
                    @if ($anime->original_name != $anime->name)

                        {{$anime->original_name}} 
                        
                    @endif
                    
                </h2>

                <h3> Studio di animazione: {{$anime->animationStudio->name}}</h3>
                <h3> Generi: 
                    @for ($i = 0; $i < count($anime->genres); $i++)
                        
                        @if ($i == count($anime->genres) - 1)
                            {{ $anime->genres[$i]->name }}
                        @else
                            {{ $anime->genres[$i]->name }},
                        @endif

                    @endfor    
                </h3>
                <h5> Lingue dub: 
                    @for ($i = 0; $i < count($anime->dubs); $i++)
                        
                        @if ($i == count($anime->dubs) - 1)
                            {{ $anime->dubs[$i]->language }}
                        @else
                            {{ $anime->dubs[$i]->language }},
                        @endif

                    @endfor 
                </h5>

                <h5> Lingue sub: 
                    @for ($i = 0; $i < count($anime->subs); $i++)
                        
                        @if ($i == count($anime->subs) - 1)
                            {{ $anime->subs[$i]->language }}
                        @else
                            {{ $anime->subs[$i]->language }},
                        @endif

                    @endfor 
                </h5>
                <h5 class="mt-2"> Episodi: {{$anime->episodes}} </h5>

                <h5 class="mt-2"> Durata media episodio: {{$anime->episodes_duration}} </h5>

                <h5 class="mt-2">Voto: {{$anime->vote / 2}}/5 </h5>
                
                <h5 class="mt-2"> Inizio: {{$anime->release_date}}, Fine: {{$anime->end_date}}</h5>

                <h5 class="mt-2"> 
                    Stato:

                    @if ($anime->completed == 1)
                        Finito
                    @else
                        In corso
                    @endif    
                </h5>
            </div>
        </div>

    </div>

     <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $anime['id'] }}" tabindex="-1" aria-labelledby="exampleModal{{ $anime['id'] }}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-light bg-dark">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModal{{ $anime['id'] }}Label">{{$anime->name}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Elimina l'anime
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
    

@endsection