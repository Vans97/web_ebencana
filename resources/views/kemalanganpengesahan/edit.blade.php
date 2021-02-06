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
      
        {!! Form::open(['action' => ['KemalanganPengesahanController@update',$kemalangan->id], 'method'=>'POST']) !!}
        <div class="card-body">
            <div class="form-group">
                {{Form::label('t_lapor','Tarikh Lapor')}}
                {{Form::text('t_lapor',$kemalangan->t_lapor,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('no_laporan','No Laporan')}}
                {{Form::text('no_laporan',$kemalangan->no_laporan,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('nama_balai','Nama Balai')}}
                {{Form::text('nama_balai',$kemalangan->nama_balai,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('kemalangan','Kemalangan')}}
                {{Form::text('kemalangan',$kemalangan->kemalangan,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('status','Status')}}
                {{Form::text('status',$kemalangan->status,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('t_dijumpai','Tarikh Dijumpai')}}
                {{Form::text('t_dijumpai',$kemalangan->t_dijumpai,['class'=>'form-control' , 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('lokasi','Lokasi')}}
                {{Form::text('lokasi',$kemalangan->lokasi,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('jajahan','Jajahan')}}
                {{Form::text('jajahan',$kemalangan->jajahan,['class'=>'form-control' , 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('nama_mangsa','Nama Mangsa')}}
                {{Form::text('nama_mangsa',$kemalangan->nama_mangsa,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('ic','No Kad Pengenalan')}}
                {{Form::text('ic',$kemalangan->ic,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('bangsa','Bangsa')}}
                {{Form::text('bangsa',$kemalangan->bangsa,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('jantina','Jantina')}}
                {{Form::text('jantina',$kemalangan->jantina,['class'=>'form-control', 'readonly'])}}
            </div>

            <div class="form-group">
                {{Form::label('alamat','Alamat')}}
                {{Form::text('alamat',$kemalangan->alamat,['class'=>'form-control', 'readonly'])}}
            </div>

            
            <div class="form-group">
                <label>Pengesahan</label>
            <select id="pengesahan" name="pengesahan" class="form-control @error('pengesahan') is-invalid @enderror" required>
                   
                   <option value="Pending">Pending</option>
                   <option value="Sah">Sah</option>
                   <option value="Batal">Batal</option>
                  
           </select>
           </div>
    
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Tambah',['class'=>'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}

    </div>
</div>
</div>



@endsection