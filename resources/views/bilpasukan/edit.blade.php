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
      
          <form action="{{action('BilPasukanController@update',$pasukan->id)}}" method="POST">
        {{ csrf_field() }}
        <div class="card-body">
               
                <hr>
                    <input type="hidden" name="_method" value="UPDATE"/>

            <div class="form-group">
                <label for="">Tarikh Lapor</label>
                <input type="text" class="form-control" name="tarikh_lapor" value="{{$pasukan->tarikh_lapor}}" readonly/>
              </div>

              <div class="form-group">
              <label for="">Jajahan</label>
              <input type="text" class="form-control" name="bjajahan" value="{{$pasukan->bjajahan}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Daerah</label>
                <input type="text" class="form-control" name="bdaerah"  value="{{$pasukan->bdaerah}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Pusat Pemindahan</label>
                <input type="text" class="form-control" name="bpemindahan"  value="{{$pasukan->bpemindahan}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Bilangan Pasukan Kesihatan</label>
                <input type="number" class="form-control" name="bil_pasukan_kesihatan" min="0" max="99999" value="{{$pasukan->bil_pasukan_kesihatan}}"/>
              </div>

              <div class="form-group">
                <label for="">Bilangan Pasukan Perubatan</label>
                <input type="number" class="form-control" name="bil_pasukan_perubatan" min="0" max="99999" value="{{$pasukan->bil_pasukan_perubatan}}"/>
              </div>

              <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan"  value="{{$pasukan->keterangan}}" />
              </div>

            {{ method_field('PUT')}}
            <button type="submit" name="submit" class="btn btn-success">Tambah</button>

        </div>
    
    </form>

    </div>
</div>
</div>



@endsection