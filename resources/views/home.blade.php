@extends('layouts.app')

@section('title', 'Pokemon ' )
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($pokedexes as $pokedexe)
            <div class="col-4 p-1">
                <div class="card">
                    <article class="card">
                        <header class="card-header">
                            <h5><strong>{{$pokedexe->id}}. </strong>{{$pokedexe->namefrench}}</h5>
                        </header>
                        <div class="card-body">
                            <div>
                                <p>type0: {{$pokedexe->type0}}</p>
                                <p>type1: {{$pokedexe->type1}}</p>

                            </div>
                        </div>
                    </article>
                </div>
            </div>
            
        @endforeach
    </div>
</div>
@endsection
