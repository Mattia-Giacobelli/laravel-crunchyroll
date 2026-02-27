@extends('layouts/admin')


@section('title')
    {{$anime->name}}
@endsection


@section('main')
    
    <div class="container mt-4">

        {{-- @dd($anime) --}}
        <div class="card d-flex">
            <div class="card-img-top">
                <img src="{{ asset('storage/' . $anime->cover) }}" alt="Anime cover" width="600px">
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

                    @if ($anime->completed)
                        Finito
                    @else
                        In corso
                    @endif    
                </h5>
            </div>
        </div>

    </div>
    

@endsection