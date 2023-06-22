@extends('layouts.main')
@section('content')


    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Serijski broj</th>
                <th>Naziv tipa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sviTipovi as $tip)
                <tr>
                    <td>{{$tip->id}}</td>
                    <td>{{$tip->serijski_broj}}</td>
                    <td>{{$tip->naziv_tipa_vozila}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

