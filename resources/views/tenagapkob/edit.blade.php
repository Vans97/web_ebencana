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
      
        {!! Form::open(['action' => ['TenagaPkobController@update',$pkob->id], 'method'=>'POST']) !!}
        <div class="card-body">
            <div class="form-group">
                {{Form::label('tahun','Tahun')}}
                {{Form::text('tahun',$pkob->tahun,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('pkob','Nama PKOB')}}
                {{Form::text('pkob',$pkob->pkob,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('pengawal','Pegawai Pengawal')}}
                {{Form::text('pengawal',$pkob->pengawal,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('awam','Pegawai Awam')}}
                {{Form::text('awam',$pkob->awam,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('petugas','Pegawai Petugas')}}
                {{Form::text('petugas',$pkob->petugas,['class'=>'form-control'])}}
            </div>
    
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Tambah',['class'=>'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}

    </div>
</div>
</div>



@endsection