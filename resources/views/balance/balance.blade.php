@extends('layouts.main')
@section('content')
    @csrf
    <div class="material">
        <div>
            <li class="list-group-item"><h2>Sio mėnesio pajamos</h2></li>
            @php $salary=0;@endphp
            @foreach($users as $one)
                @if($one->bill_type== 'inn')
                    @php $salary=$one->value+$salary; @endphp
                @endif
            @endforeach
            <li class="list-group-item">{{$salary}}</li>
        </div>
        <div>
            <li class="list-group-item"> <h2>Sio mėnesio išlaidos</h2></li>
            @php $expencess=0;@endphp
            @foreach($users as $one)
                @if($one->bill_type== 'out')
                    @php $expencess=$one->value+$expencess; @endphp
                @endif
            @endforeach
            <li class="list-group-item">{{$expencess}}</li>
        </div>
        <div>
            <li class="list-group-item">disponuojamas likutis</li>
            @php $balance=$salary+$expencess;@endphp
            <li class="list-group-item">{{$balance}}</li>
        </div>
        <div>
            <li class="list-group-item"><h2>Einojo mėnesio pajamu-islaidų planas</h2><li>
                <ul>
                    @php $all=0; @endphp
                    @foreach($data as $one)
                        @if($one->Plan->bill_type=='inn')
                            <li class="list-group-item">>PAJAMOS-{{$one->Plan->bill_name}}-SUMA{{$one->sum}}</li>
                            @php  $all=$one->sum+$all;$exp=0; @endphp
                        @endif
                </ul>       @endforeach
        </div>
        <div>
            <li class="list-group-item"><h3>VISOS PAJAMOS PAGAL PLANA-{{$all}}</h3></li>
            <ul>            @foreach($data as $one)
                    @if($one->Plan->bill_type=='out')
                        <li class="list-group-item">ISLAIDOS{{$one->Plan->bill_name}}-SUMA{{$one->sum}}</li>
                        @php $exp=$one->sum+$exp; @endphp
                    @endif
                @endforeach
                <li class="list-group-item"><h3>VISOS   ISLAIDOS PAGAL PLANA-({{$exp=$exp* -1}})</h3><li>
            </ul>
        </div>
    </div>
    <div>
        @csrf
        <form class="form" action="{{route('createAll')}}" method="POST">
            @csrf
        <input type="text" id="datepicker" name="date1">
        <script>
            $( function() {
                $( "#datepicker" ).datepicker({
                    showOtherMonths: true,
                    selectOtherMonths: true,
                    dateFormat: 'yy-mm-dd',
                });
            } );
        </script>
            <input type="text" id="datepicker2" name="date2">
            <script>
                $( function() {
                    $( "#datepicker2" ).datepicker({
                        showOtherMonths: true,
                        selectOtherMonths: true,
                        dateFormat: 'yy-mm-dd',
                    });
                } );
            </script>
            <input type="submit" class="btn btn-primary" value="Create">
        </form>
    </div>
@endsection
