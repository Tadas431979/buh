{{--@extends('layouts.app')--}}
@extends('layouts.main')
@section('content')
    @include('include.succes')
    <div>
    <ul id="list" class="list-group">
        <a href="{{ route('bills') }}" class="btn btn-primary stretched-link">sukurti saskaita</a>
        <a href="{{ route('plan') }}" class="btn btn-primary stretched-link">Sukurti pajamu plana</a>
        <a href="{{ route('balance') }}" class="btn btn-primary stretched-link">balansas</a>
    </ul>
    </div>
@endsection
