@extends('layouts.main')
@section('content')


    <form class="form"action="{{route('planStore')}}"  method="POST">
        @csrf


        <input type="text" id="datepicker" name="date_value">
        <script>
            $( function() {
                $( "#datepicker" ).datepicker({
                    showOtherMonths: true,
                    selectOtherMonths: true,
                    dateFormat: 'yy mm ',
                    minDate: '+1m'
                });
            } );
        </script>
        <div class="box">
            <h1>pajamu planas</h1>
            @foreach($plan as $onePlan)
                @if($onePlan->bill_type=='inn')
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm"><a>{{$onePlan->bill_name}}</a></span>
                        </div>
                        <input type="hidden" name="bill_id[]" value="{{$onePlan->id}}">
                        <input  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="sum{{$onePlan->id}}" type="number" placeholder="iveskite planuojamas pajamas"><br>

                    </div>
                @endif
            @endforeach
        </div>
        <h1>Islaidu planas</h1>
        @foreach($plan as $onePlan)
            @if($onePlan->bill_type == 'out')
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">{{$onePlan->bill_name}}</span>
                    </div>

                    <input type="hidden" name="bill_id[]" value="{{$onePlan->id}}">

                    <input id="sum" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="sum{{$onePlan->id}}" type="number" placeholder="iveskite planuojamas islaidas"><br>
                </div>
            @endif
        @endforeach
        <input type="submit" class="btn btn-primary" value="Create">

    </form>

    <script src="{{asset('js/datepicker.js')}}"></script>
@endsection
