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
      
        {!! Form::open(['action' => ['PkobController@update',$pkob->id], 'method'=>'POST']) !!}
        <div class="card-body">
            <div class="form-group">
                {{Form::label('kod','Kod')}}
                {{Form::text('kod',$pkob->kod,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('nama','Nama')}}
                {{Form::text('nama',$pkob->nama,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('talian','No Talian Kecemasan')}}
                {{Form::text('talian',$pkob->talian,['class'=>'form-control'])}}
            </div>

            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Kemaskini',['class'=>'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}

    </div>
</div>
</div>



@endsection