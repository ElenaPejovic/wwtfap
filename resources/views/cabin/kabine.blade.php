@extends('layouts.main')
@section('content')


    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Broj sedista</th>
                <th>Link za detalje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sveKabine as $kabina)
                <tr>
                    <td>{{$kabina->id}}</td>
                    <td>{{$kabina->broj_sedista}}</td>
                    <td><a href="{{route('cabin-details',['id'=>$kabina->id])}}">Detaljno</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

