@extends('layouts.main')
@section('content')

    <h1>Detalji</h1>
        <h2>ID:</h2>{{$sanduk->id}}
        <h2>Serijski broj:</h2>{{$sanduk->serijski_broj}}
        <h2>Materijal:</h2>{{$sanduk->materijal}}
        <h2>Dimenzije:</h2>{{$sanduk->dimenzije}}


@endsection