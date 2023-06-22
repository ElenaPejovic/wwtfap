@extends('layouts.main')
@section('content')


    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Serial number</th>
                <th>Type of vehicle</th>
                <th>Vehicle frame</th>
                <th>Vehicle cabin</th>
                <th>Vehicle trunk</th>
                <th>Status</th>
                <th>Special upgrade</th>
                <th>Link za detalje</th>

            </tr>
        </thead>
        <tbody>
            @foreach($svaVozila as $vozilo)
                <tr>
                    <td>{{$vozilo->id}}</td>
                    <td>{{$vozilo->serijski_broj}}</td>
                    <td>{{$vozilo->tip_id}}</td>
                    <td>{{$vozilo->ram_id}}</td>
                    <td>{{$vozilo->kabina_id}}</td>
                    <td>{{$vozilo->sanduk_id}}</td>
                    <td>{{$vozilo->status}}</td>
                    <td>{{$vozilo->nadogradnja_id}}</td>
                    <td><a href="{{route('deals-detail',['id'=>$vozilo->id])}}">Detaljno</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

