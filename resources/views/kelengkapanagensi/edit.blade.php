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
      
        {!! Form::open(['action' => ['KelengkapanAgensiController@update',$kelengkapan->id], 'method'=>'POST']) !!}
        <div class="card-body">
            <div class="form-group">
                {{Form::label('kjabatan','Jabatan')}}
                {{Form::text('kjabatan',$kelengkapan->kjabatan,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('kpkob','PKOB')}}
                {{Form::text('kpkob',$kelengkapan->kpkob,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('kaset','Aset')}}
                {{Form::text('kaset',$kelengkapan->kaset,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('kuantiti','kuantiti')}}
                {{Form::text('kuantiti',$kelengkapan->kuantiti,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('nota','Nota')}}
                {{Form::text('nota',$kelengkapan->nota,['class'=>'form-control'])}}
            </div>
    
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Tambah',['class'=>'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}

    </div>
</div>
</div>



@endsection