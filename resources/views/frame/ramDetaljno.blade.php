@extends('layouts.main')
@section('content')

    <h1>Detalji</h1>
        <h2>ID:</h2>{{$ram->id}}
        <h2>Serijski broj:</h2>{{$ram->serijski_broj}}
        <h2>Materijal:</h2>{{$ram->materijal}}
        <h2>Dimenzije:</h2>{{$ram->dimenzije}}


@endsection