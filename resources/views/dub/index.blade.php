@extends('layouts/admin')


@section('title')
    Lingue Doppiaggio
@endsection


@section('main')
    
    <div class="container  mt-5">

        <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="{{ route('dub.create')}}">Aggiungi una Lingua</a>
        </div>

        <table class="table table-striped table-dark mt-4 w-100">
            <thead>
                {{-- <th></th> --}}
                <th scope="col">Lingua</th>
                <th scope="col">Iso</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </thead>

            <tbody >

                @foreach ($dubs as $dub)
                    {{-- {{$project->id}} --}}
                    <tr>
                        {{-- <td>
                            <img src="{{ Vite::asset($project['img']) }}" alt="scree">
                        </td> --}}

                        <td class="align-middle">
                            <a href="{{route('dub.show', $dub['id'])}}">{{$dub['language']}}</a>
                        </td>
                        <td class="align-middle">
                            {{$dub['iso_code']}}
                        </td>

                        <td>
                            <a class="btn btn-outline-warning " href="{{ route('dub.edit', $dub)}}">Modifica</a>
                        </td>

                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-danger " data-bs-toggle="modal" data-bs-target="#exampleModal{{ $dub['id'] }}">
                                Elimina
                            </button>

                        </td>

                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $dub['id'] }}" tabindex="-1" aria-labelledby="exampleModal{{ $dub['id'] }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content text-light bg-dark">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModal{{ $dub['id'] }}Label">{{$dub->language}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Elimina la lingua
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

                @endforeach

            </tbody>
        </table>

    </div> 

@endsection