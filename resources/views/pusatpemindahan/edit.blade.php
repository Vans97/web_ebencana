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
      
        {!! Form::open(['action' => ['PusatPemindahanController@update',$pusat->lkod], 'method'=>'POST']) !!}
        <div class="card-body">
            <div class="form-group">
                {{Form::label('kjajahan','Jajahan')}}
                {{Form::text('kjajahan',$pusat->pjajahan,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('kdaerah','Daerah')}}
                {{Form::text('kdaerah',$pusat->pdaerah,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('lkod','Kod Pusat Pemindahan')}}
                {{Form::text('lkod',$pusat->lkod,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('nama','Nama Pusat Pemindahan')}}
                {{Form::text('nama',$pusat->nama,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('had','Had Muatan')}}
                {{Form::number('had',$pusat->had,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('keterangan','Keterangan')}}
                {{Form::text('keterangan',$pusat->keterangan,['class'=>'form-control'])}}
            </div>

            
    
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Kemaskini',['class'=>'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}

    </div>
</div>
</div>



@endsection