@extends('layouts.main')
@section('content')


    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Dimenzije</th>
                <th>Link za detalje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sviRamovi as $ram)
                <tr>
                    <td>{{$ram->id}}</td>
                    <td>{{$ram->dimenzije}}</td>
                    <td><a href="{{route('frame-details',['id'=>$ram->id])}}">Detaljno</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

