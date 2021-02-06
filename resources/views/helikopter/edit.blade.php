@extends('layouts.super')

@section('content')
          <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Kemaskini</h3>
          </div>
      
        {!! Form::open(['action' => ['HelikopterController@update',$helikopter->id], 'method'=>'POST']) !!}
        <div class="card-body">
            <div class="form-group">
                {{Form::label('hjajahan','Jajahan')}}
                {{Form::text('hjajahan',$helikopter->hjajahan,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('lokasi','Lokasi')}}
                {{Form::text('lokasi',$helikopter->lokasi,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('latitude','Latitude')}}
                {{Form::text('latitude',$helikopter->latitude,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('longitude','Longitude')}}
                {{Form::text('longitude',$helikopter->longitude,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('nota','Nota')}}
                {{Form::text('nota',$helikopter->nota,['class'=>'form-control'])}}
            </div>
    
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Tambah',['class'=>'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}

    </div>
</div>
</div>



@endsection