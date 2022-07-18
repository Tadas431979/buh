@extends('layouts.main')
@section('content')
    @csrf
    <div class="material">
        <div>
           <h2>Sio mėnesio pajamos</h2>
            @php $salary=0;@endphp
            @foreach($users as $one)
                @if($one->bill_type== 'inn')
                    @php $salary=$one->value+$salary; @endphp
                @endif
            @endforeach
            <li class="list-group-item">{{$salary}}</li>
        </div>
        <div>
            <h2>Sio mėnesio išlaidos</h2>
            @php $expencess=0;@endphp
            @foreach($users as $one)
                @if($one->bill_type== 'out')
                    @php $expencess=$one->value+$expencess; @endphp
                @endif
            @endforeach
            <li class="list-group-item">{{$expencess}}</li>
        </div>
        <div>
        <h2>Disponuojamas likutis</h2>
            @php $balance=$salary+$expencess;@endphp
            <li class="list-group-item">{{$balance}}</li>
        </div>
        <div>
            <h2>Einojo mėnesio pajamu-islaidų planas</h2>
                    @php $all=0; @endphp
                    @foreach($data as $one)
                        @if($one->Plan->bill_type=='inn')
                            <li class="list-group-item">PAJAMOS-{{$one->Plan->bill_name}}-SUMA{{$one->sum}}</li>
                            @php  $all=$one->sum+$all;$exp=0; @endphp
                        @endif
                       @endforeach
        </div>
        <div>
            <h3>VISOS PAJAMOS PAGAL PLANA-{{$all}}</h3>
            <ul>            @foreach($data as $one)
                    @if($one->Plan->bill_type=='out')
                        <li class="list-group-item">ISLAIDOS{{$one->Plan->bill_name}}-SUMA{{$one->sum}}</li>
                        @php $exp=$one->sum+$exp; @endphp
                    @endif
                @endforeach
                </ul> 
        </div>
        <div>
        <h3>VISOS   ISLAIDOS PAGAL PLANA-({{$exp=$exp* -1}})</h3>
</div>
    </div>
    <div>
        @csrf
        <form class="form" action="{{route('createAll')}}" method="POST">
            @csrf
        <h2>Balansas pagal pasirinkta laikotarpi</h2>
        <div class="row">
            <div class="col-md-2">
                <input type="text" id="datepicker" name="date1">
            </div>
        <script>
            $( function() {
                $( "#datepicker" ).datepicker({
                    showOtherMonths: true,
                    selectOtherMonths: true,
                    dateFormat: 'yy-mm-dd',
                });
            } );
        </script>
        <div class="col-md-2">
            <input type="text" id="datepicker2" name="date2">
        </div>
            <script>
                $( function() {
                    $( "#datepicker2" ).datepicker({
                        showOtherMonths: true,
                        selectOtherMonths: true,
                        dateFormat: 'yy-mm-dd',
                    });
                } );
            </script>

        </div>
        <div class="col-md-4"> 
                <input type="submit" class="btn btn-primary" value="Create">
            </div>


        </form>
    </div>
@endsection
