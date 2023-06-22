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
            @foreach($sviSanduci as $sanduk)
                <tr>
                    <td>{{$sanduk->id}}</td>
                    <td>{{$sanduk->dimenzije}}</td>
                    <td><a href="{{route('trunk-details',['id'=>$sanduk->id])}}">Detaljno</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

