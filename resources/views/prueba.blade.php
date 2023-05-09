@extends('layouts.app')

@section('title', 'Prueba')

@section('content')

<body class="bg-dark">
    <div class="container">
        <div class="cards text-white">
            <h1>Rick and Morty API</h1>
            <pre>{{ json_encode($personajes, JSON_PRETTY_PRINT) }}</pre>
        </div>
    </div>
</body>

@endsection