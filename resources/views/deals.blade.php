@extends('layouts.main')
@section('content')

<form method="post" action="{{ route('deals-processing') }}">
    @csrf
    <div class="form-group">
        <label>Serijski broj</label>
        <input class="form-control" name="serijski_broj">
    </div>
    <div class="form-group">
        <label>Frame</label>
        <select class="form-control" name="ram_id">
            @foreach($sviRamovi as $ram)
                <option value="{{ $ram->id }}">{{ $ram->serijski_broj }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Cabin</label>
        <select class="form-control" name="kabina_id">
            @foreach($sveKabine as $kabina)
                <option value="{{ $kabina->id }}">{{ $kabina->serijski_broj }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Trunk</label>
        <select class="form-control" name="sanduk_id">
            @foreach($sviSanduci as $sanduk)
                <option value="{{ $sanduk->id }}">{{ $sanduk->serijski_broj }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Type</label>
        <select class="form-control" name="tip_id">
            @foreach($sviTipovi as $tip)
                <option value="{{ $tip->id }}">{{ $tip->serijski_broj }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Upgrade</label>
        <select class="form-control" name="nadogradnja_id">
            @foreach($sveNadogradnje as $nadogradnja)
                <option value="{{ $nadogradnja->id }}">{{ $nadogradnja->serijski_broj }}</option>
            @endforeach
        </select>
    </div>
    
    <button class="btn btn-primary">Done</button>
</form>

@endsection

