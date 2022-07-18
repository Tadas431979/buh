
@extends('layouts.main')
    @section('content')
@include('include.succes')


        <div>
            <h1> Pajamos</h1>
            @foreach($data as $updBill)
                @if($updBill->relation->bill_type=='inn')
                    <ul class="list-group">
                        <li class="list-group-item">SĄSKAITOS PAVADINIMAS-{{$updBill->relation->bill_name}} SUMA-{{$updBill->value}} IRAŠO DATA-{{$updBill->date_value}}</li>
                        <a href="{{route('edit',$updBill->id)}}">edit</a>
                    </ul>
                @endif
            @endforeach
        </div>

        <div>
            <h1> Išlaidos</h1>
            @foreach($data as $updBill)
                @if($updBill->relation->bill_type=='out')
                    <ul class="list-group">
                        <li class="list-group-item">SĄSKAITOS PAVADINIMAS-{{$updBill->relation->bill_name}} SUMA-{{$updBill->value}} IRAŠO DATA- {{$updBill->date_value}}</li>
                        <a href="{{route('edit',$updBill->id)}}">edit</a>
                    </ul>
                @endif
            @endforeach
        </div>
@endsection
