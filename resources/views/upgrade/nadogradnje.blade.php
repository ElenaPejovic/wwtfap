@extends('layouts.main')
@section('content')


    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Serijski broj</th>
                <th>Naziv nadogradnje</th>
                <th>Link za detalje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sveNadogradnje as $nadogradnja)
                <tr>
                    <td>{{$nadogradnja->id}}</td>
                    <td>{{$nadogradnja->serijski_broj}}</td>
                    <td>{{$nadogradnja->naziv_nadogradnje}}</td>
                    <td><a href="{{route('upgrade-details',['id'=>$nadogradnja->id])}}">Detaljno</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

