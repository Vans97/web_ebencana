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
      
          <form action="{{action('PeralatanPBSMController@update',$peralatan->id)}}" method="POST">
        {{ csrf_field() }}
        <div class="card-body">
               
                <hr>
                    <input type="hidden" name="_method" value="UPDATE"/>

            <div class="form-group">
                <label for="">Tarikh Lapor</label>
                <input type="text" class="form-control" name="tarikh_lapor" value="{{$peralatan->tarikh_lapor}}" readonly/>
              </div>

              <div class="form-group">
              <label for="">Jajahan</label>
              <input type="text" class="form-control" name="peralatan_jajahan" value="{{$peralatan->peralatan_jajahan}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Daerah</label>
                <input type="text" class="form-control" name="peralatan_daerah"  value="{{$peralatan->peralatan_daerah}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Pusat Pemindahan</label>
                <input type="text" class="form-control" name="peralatan_pemindahan"  value="{{$peralatan->peralatan_pemindahan}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Jenis Peralatan</label>
                <input type="text" class="form-control" name="peralatan"  value="{{$peralatan->peralatan}}"/>
              </div>

              <div class="form-group">
                <label for="">Kuantiti</label>
                <input type="number" class="form-control" name="kuantiti" min="0" max="99999" value="{{$peralatan->kuantiti}}"/>
              </div>

              <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan"  value="{{$peralatan->keterangan}}" />
              </div>
 

            {{ method_field('PUT')}}
            <button type="submit" name="submit" class="btn btn-success">Kemaskini</button>

        </div>
    
    </form>

    </div>
</div>
</div>



@endsection