@extends('layouts.main')
@section('content')
    @include('include.succes')

    <form class="form" action="{{route('update_bill',$updBill->id)}}" method="POST">
            @csrf
        <input type="text" id="datepicker" name="date_value" value="{{$updBill->date_value}}"  >
        <script>
            $( function() {
                $( "#datepicker" ).datepicker({
                    showOtherMonths: true,
                    selectOtherMonths: true,
                    dateFormat: 'yy-mm-dd',
                });
            } );
        </script>

            <li class="list-group-item">{{$updBill->relation->name}}</li>
            <input type="hidden" name="type"value="{{$updBill->type}}">

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">iveskite pinigų sumą</span>
                </div>
                <input type="integer" name="value" value="{{$updBill->value}}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Sąskaitos komentaras</span>
                </div>
                <textarea name="comment" class="form-control" aria-label="With textarea">{{$updBill->comment}}</textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Create">

        </form>
    @endsection

