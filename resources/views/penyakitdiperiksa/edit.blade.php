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
      
          <form action="{{action('PenyakitDiperiksaController@update',$penyakit->id)}}" method="POST">
        {{ csrf_field() }}
        <div class="card-body">
               
                <hr>
                    <input type="hidden" name="_method" value="UPDATE"/>

            <div class="form-group">
                <label for="">Tarikh Lapor</label>
                <input type="text" class="form-control" name="tarikh_lapor" value="{{$penyakit->tarikh_lapor}}" readonly/>
              </div>

              <div class="form-group">
              <label for="">Jajahan</label>
              <input type="text" class="form-control" name="penyakit_jajahan" value="{{$penyakit->penyakit_jajahan}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Daerah</label>
                <input type="text" class="form-control" name="penyakit_daerah"  value="{{$penyakit->penyakit_daerah}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Pusat Pemindahan</label>
                <input type="text" class="form-control" name="penyakit_pemindahan"  value="{{$penyakit->penyakit_pemindahan}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Bilangan Penyakit Berjangkit</label>
                <input type="number" class="form-control" name="bil_penyakit_berjangkit" min="0" max="99999" value="{{$penyakit->bil_penyakit_berjangkit}}"/>
              </div>

              <div class="form-group">
                <label for="">Bilangan Penyakit Tidak Berjangkit</label>
                <input type="number" class="form-control" name="bil_penyakit_tidak_berjangkit" min="0" max="99999" value="{{$penyakit->bil_penyakit_tidak_berjangkit}}"/>
              </div>

              <div class="form-group">
                <label for="">Bilangan Kecederaan</label>
                <input type="number" class="form-control" name="bil_kecederaan" min="0" max="99999" value="{{$penyakit->bil_kecederaan}}"/>
              </div>

              <div class="form-group">
                <label for="">Bilangan Kematian</label>
                <input type="number" class="form-control" name="bil_kematian" min="0" max="99999" value="{{$penyakit->bil_kematian}}"/>
              </div>

              <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan"  value="{{$penyakit->keterangan}}" />
              </div>
 

            {{ method_field('PUT')}}
            <button type="submit" name="submit" class="btn btn-success">Tambah</button>

        </div>
    
    </form>

    </div>
</div>
</div>



@endsection