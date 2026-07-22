@extends('components.layout')

@section('content')
    <h1>Stage</h1>

    @foreach($stages as $stage)
        <p>({{ $stage["order_no"] }}) - {{ $stage["description"] }}</p>
    @endforeach

@endsection
