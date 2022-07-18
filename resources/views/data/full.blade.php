@extends('layouts.main')
@section('content')
@include('include.succes')
<div class="full">
    <form class="form" action="{{route('store')}}" method="POST">
@csrf

        <input type="text" id="datepicker" name="date_value" placeholder="Iveskite data">
        <script>
            $( function() {
                $( "#datepicker" ).datepicker({
                    showOtherMonths: true,
                    selectOtherMonths: true,
                    dateFormat: 'yy-mm-dd',
                });
            } );
        </script>

        <div class="bill">
            <select name="type" class="form-select" aria-label="Default select example">
                <option selected>Pasirinkite sąskaita</option>
                @foreach($bills as $bill)

                    <option value="{{$bill->id}}" >{{$bill->bill_name}}</option>

                @endforeach
            </select>
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">iveskite pinigų sumą</span>
            </div>
            <input type="integer" name="value" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text big-comment">Sąskaitos komentaras</span>
            </div>
            <textarea name="comment" class="form-control" aria-label="With textarea"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Create">
    </form>
</div>

@endsection
