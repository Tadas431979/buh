{{--@extends('layouts.app')--}}
@extends('layouts.main')
@section('content')
    @include('include.succes')
    <div>
    <ul id="list" class="list-group" style="width: 28rem">
        <a href="{{ route('bills') }}" class="btn btn-primary stretched-link">sukurti saskaita</a>
        <li class="list-group-item">List Group</li>
        <li class="list-group-item">List Group</li>
        <li class="list-group-item">List Group</li>
        <li class="list-group-item">List Group</li>
    </ul>
    </div>
@endsection
