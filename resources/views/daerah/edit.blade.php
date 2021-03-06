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
      
        {!! Form::open(['action' => ['DaerahController@update',$daerah->kod], 'method'=>'POST']) !!}
        <div class="card-body">
            <div class="form-group">
                {{Form::label('kod','Kod Daerah')}}
                {{Form::text('kod',$daerah->kod,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('nama','Nama Daerah')}}
                {{Form::text('nama',$daerah->nama,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('djajahan','Jajahan', 'hidden')}}
                {{Form::text('djajahan',$daerah->djajahan,['class'=>'form-control', 'readonly', 'hidden'])}}
            </div>
    
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Kemaskini',['class'=>'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}

    </div>
</div>
</div>



@endsection