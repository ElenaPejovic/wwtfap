@extends('layouts.main')
@section('content')

    <h1>Detalji</h1>
        <h2>ID:</h2>{{$kabina->id}}
        <h2>Serijski broj:</h2>{{$kabina->serijski_broj}}
        <h2>Materijal:</h2>{{$kabina->materijal}}
        <h2>Broj sedista:</h2>{{$kabina->broj_sedista}}


@endsection