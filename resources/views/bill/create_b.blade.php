@extends('layouts.main')
@section('content')
    @include('include.succes')

    <body>
    <div class="">
        <div class="box-1">
            <form class="form" action="{{route('billStore')}}"  method="POST">
                @csrf
                <select class="form-select" name="bill_type" aria-label="sąskaitos tipas">
                    <option selected>sąskaitos tipas</option>
                    <option value="inn">pajamos</option>
                    <option value="out">Islaidos</option>
                </select>
                <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Irasykite saskaitos pavadinima</span>
            </div>
                <input type="integer" name="bill_name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
                <input type="submit" class="btn btn-primary" value="Create">
            </form>
        </div>
        <div class="box-2 list-bills" >

            <div class="titleh"><h1 class="title">Saskaitu sarasas</h1></div>
            <h2>  pajamos</h2>
            <ul>
                @foreach($bill_list as $bill)
                    @if ($bill->bill_type=='inn')
                        <li>{{$bill->bill_name}}</li>
                    @endif
                @endforeach
            </ul>

            <h2>islaidos</h2>
            <ul>
                @foreach($bill_list as $bill)
                    @if ($bill->bill_type=='out')
                            <li>{{$bill->bill_name}}</li>
                    @endif
                @endforeach
            </ul>

        </div>
        @endsection
    </div>
