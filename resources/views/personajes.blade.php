@extends('layouts.app')

@section('title', 'Personajes')

@section('content')

<body class="bg-dark">
    <div class="container">
        <div class="row cards">
            @foreach ($personajes->results as $personaje)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="{{ $personaje->image }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $personaje->name }}</h5>
                        <p class="card-text">Estado: <span class="badge @if($personaje->status == 'Dead') bg-danger @elseif ($personaje->status == 'unknown') bg-secondary @else bg-success @endif">{{ $personaje->status }}</span></p>
                        <p class="card-text">Especie: {{ $personaje->species }}</p>
                        <p class="card-text">Género: {{ $personaje->gender }}</p>
                        <p class="card-text">Origen: {{ $personaje->origin->name }}</p>
                        <p class="card-text">Locación: {{ $personaje->location->name }}</p>
                    </div>
                </div>
            </div>
            @if($loop->iteration % 4 == 0)
        </div>
        <div class="row">
            @endif
            @endforeach
        </div>
    </div>
</body>

@endsection