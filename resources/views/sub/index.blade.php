@extends('layouts/admin')


@section('title')
    Lingue Sottotitoli
@endsection


@section('main')
    
    <div class="container  mt-5">

        <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="{{ route('sub.create')}}">Aggiungi una Lingua sottotitoli</a>
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

                @foreach ($subs as $sub)
                    {{-- {{$project->id}} --}}
                    <tr>
                        {{-- <td>
                            <img src="{{ Vite::asset($project['img']) }}" alt="scree">
                        </td> --}}

                        <td class="align-middle">
                            <a href="{{route('sub.show', $sub['id'])}}">{{$sub['language']}}</a>
                        </td>
                        <td class="align-middle">
                            {{$sub['iso_code']}}
                        </td>

                        <td>
                            <a class="btn btn-outline-warning " href="{{ route('sub.edit', $sub)}}">Modifica</a>
                        </td>

                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-danger " data-bs-toggle="modal" data-bs-target="#exampleModal{{ $sub['id'] }}">
                                Elimina
                            </button>

                        </td>

                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $sub['id'] }}" tabindex="-1" aria-labelledby="exampleModal{{ $sub['id'] }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content text-light bg-dark">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModal{{ $sub['id'] }}Label">{{$sub->language}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Elimina la lingua
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
            
                                    <form action="{{ route('sub.destroy', $sub)}}" method="POST">
            
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