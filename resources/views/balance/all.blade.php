@extends('layouts.main')
@section('content')
@include('include.succes')
<h2>Pajamos</h2>
<input type="hidden"{{$count=0}}>

@foreach($data as $one)

    @if($one->bill_type=='inn')

        <input type="hidden" {{$count=$one->value+$count}}>
    @endif
@endforeach

<li class="list-group-item"><h3>VISOS-{{$count}}</h3></li>

<h2>Islaidos</h2>
<input type="hidden"{{$count=0}}>

@foreach($data as $one)

    @if($one->bill_type=='out')

        <input type="hidden" {{$count=$one->value+$count}}>
    @endif
@endforeach

<li class="list-group-item"><h3>VISO-({{$count}})</h3></li>
@endsection
