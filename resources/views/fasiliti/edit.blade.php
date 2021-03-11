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
      
          <form action="{{action('FasilitiController@update',$fasiliti->id)}}" method="POST">
        {{ csrf_field() }}
        <div class="card-body">
               
                <hr>
                    <input type="hidden" name="_method" value="UPDATE"/>

            <div class="form-group">
                <label for="">Tarikh Lapor</label>
                <input type="text" class="form-control" name="tarikh_lapor" value="{{$fasiliti->tarikh_lapor}}" readonly/>
              </div>

              <div class="form-group">
              <label for="">Jajahan</label>
              <input type="text" class="form-control" name="fjajahan" value="{{$fasiliti->fjajahan}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Daerah</label>
                <input type="text" class="form-control" name="fdaerah"  value="{{$fasiliti->fdaerah}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Klinik</label>
                <input type="text" class="form-control" name="fklinik"  value="{{$fasiliti->fklinik}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Lokasi Pemindahan</label>
                <input type="text" class="form-control" name="lokasi"  value="{{$fasiliti->lokasi}}" />
              </div>

              <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan"  value="{{$fasiliti->keterangan}}" />
              </div>

              <div class="form-group">
                <label for="">Fasiliti Terlibat</label>
                <input type="text" class="form-control" name="fasiliti_terlibat"  value="{{$fasiliti->fasiliti_terlibat}}" />
              </div>

              <!-- <div class="form-group">
                <label for="">Jenis Kerosakan</label>
                <input type="text" class="form-control" name="jenis_kerosakan"  value="{{$fasiliti->jenis_kerosakan}}" />
              </div> -->

              <div class="form-group">
                <label for="">Jenis Kerosakan</label><br>
                <input type="radio" id="tenggelam" name="jenis_kerosakan" value="Tenggelam" {{$fasiliti->jenis_kerosakan == 'Tenggelam' ? 'checked' : '' }}/>
                <label for="tenggelam">Tenggelam</label><br>

                <input type="radio" id="operasi" name="jenis_kerosakan" value="Terputus Hubungan & Masih Beroperasi" {{$fasiliti->jenis_kerosakan == 'Terputus Hubungan & Masih Beroperasi' ? 'checked' : '' }}/>
                <label for="operasi">Terputus Hubungan & Masih Beroperasi</label><br>

                <input type="radio" id="takoperasi" name="jenis_kerosakan" value="Terputus Hubungan & Tidak Beroperasi" {{$fasiliti->jenis_kerosakan == 'Terputus Hubungan & Tidak Beroperasi' ? 'checked' : '' }}/>
                <label for="takoperasi">Terputus Hubungan & Tidak Beroperasi</label><br>
              </div>

            

            {{ method_field('PUT')}}
            <button type="submit" name="submit" class="btn btn-success">Tambah</button>

        </div>
    
    </form>

    </div>
</div>
</div>



@endsection