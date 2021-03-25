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
      
          <form action="{{action('BilPetugasController@update',$petugas->id)}}" method="POST">
        {{ csrf_field() }}
        <div class="card-body">
               
                <hr>
                    <input type="hidden" name="_method" value="UPDATE"/>

            <div class="form-group">
                <label for="">Tarikh Lapor</label>
                <input type="text" class="form-control" name="tarikh_lapor" value="{{$petugas->tarikh_lapor}}" readonly/>
              </div>

              <div class="form-group">
              <label for="">Jajahan</label>
              <input type="text" class="form-control" name="bjajahan" value="{{$petugas->bjajahan}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Daerah</label>
                <input type="text" class="form-control" name="bdaerah"  value="{{$petugas->bdaerah}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Pusat Pemindahan</label>
                <input type="text" class="form-control" name="bpemindahan"  value="{{$petugas->bpemindahan}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Bilangan Petugas Lelaki</label>
                <input type="number" class="form-control" name="bil_lelaki" min="0" max="99999" value="{{$petugas->bil_lelaki}}"/>
              </div>

              <div class="form-group">
                <label for="">Bilangan Petugas Perempuan</label>
                <input type="number" class="form-control" name="bil_perempuan" min="0" max="99999" value="{{$petugas->bil_perempuan}}"/>
              </div>

              <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan"  value="{{$petugas->keterangan}}" />
              </div>

            {{ method_field('PUT')}}
            <button type="submit" name="submit" class="btn btn-success">Kemaskini</button>

        </div>
    
    </form>

    </div>
</div>
</div>



@endsection