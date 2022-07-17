@extends('layouts.main')
@section('content')
    @include('include.succes')

    <body>
    <div class="container-1">
        <div class="box-1">
            <form class="form" action="{{route('billStore')}}"  method="POST">
                @csrf
                <select id="bill" class="form-select" name="bill_type" aria-label="sąskaitos tipas">
                    <option selected>sąskaitos tipas</option>
                    <option value="inn">pajamos</option>
                    <option value="out">Islaidos</option>
                </select>
                <span class="input-group-text" id="basic-addon1">Irasykite saskaitos pavadinima</span>
                <input  type="text" class="name" name="bill_name" >

                <input type="submit" class="btn btn-primary" value="Create">
            </form>
        </div>
        <div class="box-2" >

            <div class="titleh"><h1 class="title">Saskaitu sarasas</h1></div>
            <h3>  pajamos</h3>
            <ul>
                @foreach($bill_list as $bill)
                    @if ($bill->bill_type=='inn')
                        <li><a>{{$bill->bill_name}}</a></li>
                    @endif
                @endforeach
            </ul>

            <h1>islaidos</h1>
            <ul>
                @foreach($bill_list as $bill)
                    @if ($bill->bill_type=='out')
                        <tr>
                            <li><h5>{{$bill->bill_name}}</h5></li>
                        </tr>
                    @endif
                @endforeach
            </ul>

        </div>
        @endsection
    </div>
