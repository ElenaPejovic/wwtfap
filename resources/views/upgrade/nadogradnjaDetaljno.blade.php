@extends('layouts.main')
@section('content')

    <h1>Detalji</h1>
        <h2>ID:</h2>{{$nadogradnja->id}}
        <h2>Serijski broj:</h2>{{$nadogradnja->serijski_broj}}
        <h2>Materijal:</h2>{{$nadogradnja->naziv_nadogradnje}}


@endsection