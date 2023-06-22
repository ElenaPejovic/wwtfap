@extends('layouts.main')
@section('content')

    <h1>{{ $vozilo->id }} {{ $vozilo->serijski_broj }}</h1>
    <p>
        Tip vozila: {{ $vozilo->tip_id }}
        Ram vozila: {{ $vozilo->ram_id }}
        Kabina vozila: {{ $vozilo->tkabina_id }}
        Sanduk vozila: {{ $vozilo->sanduk_id }}
        Nadogradnja vozila: {{ $vozilo->nadogradnja_id }}
    </p>
    <form method="post" action="{{ route('change-status', ['id'=>$vozilo->id]) }}">
        @csrf
        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status">
                <option>Delivered</option>
                <option>Processing</option>
                <option>Sent</option>
            </select>
        </div>
        <button class="btn btn-primary">Change status</button>
    </form>

@endsection