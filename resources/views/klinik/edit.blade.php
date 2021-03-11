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
      
        {!! Form::open(['action' => ['KlinikController@update',$klinik->kod], 'method'=>'POST']) !!}
        <div class="card-body">
            <div class="form-group">
                {{Form::label('kjajahan','Jajahan')}}
                {{Form::text('kjajahan',$klinik->kjajahan,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('kdaerah','Daerah')}}
                {{Form::text('kdaerah',$klinik->kdaerah,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('lkod','Kod klinik')}}
                {{Form::text('lkod',$klinik->kod,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('nama','Nama Klinik')}}
                {{Form::text('nama',$klinik->nama,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('no_talian','No Talian')}}
                {{Form::text('no_talian',$klinik->no_talian,['class'=>'form-control'])}}
            </div>

            
    
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Tambah',['class'=>'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}

    </div>
</div>
</div>



@endsection