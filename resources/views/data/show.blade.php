
@extends('layouts.main')
    @section('content')
@include('include.succes')


        <div>
            <h2 class="subtitle">Pajamos</h2>

            @foreach($data as $updBill)
                @if($updBill->relation->bill_type=='inn')
                <div class="row invoice-list-item">
                    <div class="col-md-8">
                        <label>SĄSKAITOS PAVADINIMAS-{{$updBill->relation->bill_name}} SUMA-{{$updBill->value}} IRAŠO DATA-{{$updBill->date_value}}</label>
                    </div>
                    <div class="col-md-4">   
                        <a href="{{route('edit',$updBill->id)}}">edit</a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>

        <div>
            <h2 class="subtitle">Išlaidos</h2>
            @foreach($data as $updBill)
                @if($updBill->relation->bill_type=='out')
                <div class="row invoice-list-item">
                    <div class="col-md-8">
                            <label>SĄSKAITOS PAVADINIMAS-{{$updBill->relation->bill_name}} SUMA-{{$updBill->value}} IRAŠO DATA- {{$updBill->date_value}}</label>
                        </div>
                        <div class="col-md-4">
                            <a href="{{route('edit',$updBill->id)}}">edit</a>
                            </div>
                </div>
                @endif
            @endforeach
        </div>
@endsection
