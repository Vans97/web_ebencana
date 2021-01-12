@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Kemaskini Pengguna</h3>
          </div>
      
        {!! Form::open(['action' => ['ProfileController@update',$user->id], 'method'=>'POST']) !!}
        <div class="card-body">
            <div class="form-group">
                {{Form::label('name','Nama')}}
                {{Form::text('name',$user->name,['class'=>'form-control','readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('email','Email')}}
                {{Form::text('email',$user->email,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('password','Kata Laluan')}}
                {{Form::text('password',$user->password,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('namaP','Nama Pengguna')}}
                {{Form::text('namaP',$user->namaP,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('kumpulan','Kumpulan')}}
                {{Form::text('kumpulan',$user->kumpulan,['class'=>'form-control','readonly'])}}
            </div>

            
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}

    </div>
</div>
</div>
</div>

@endsection

