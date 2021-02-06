@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tenaga Kerja PKOB</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('TenagaPkobController@store')}}">
            {{csrf_field()}}
            <div class="card-body">

           
             <div class="form-group">
                <label for="">Tahun</label>
                <input type="text" class="form-control" name="tahun" pattern="[0-9]{4}" title="Tahun mestilah dalam angka" />
              </div>

              <div class="form-group">
                  
              <label for="pkob" class="col-md-0 col-form-label text-md-right">{{ __('PKOB') }}</label>
              <select id="pkob" name="pkob" class="form-control @error('pkob') is-invalid @enderror" required>
                         @foreach($pkobs as $pkob)
                        <option value="{{ $pkob->nama }}">{{ $pkob->nama }}</option>
                         @endforeach
              </select>

              </div>

              <div class="form-group">
                <label for="">Pegawai Pengawal</label>
                <input type="number" class="form-control" name="pengawal" min="0" max="99999" />
              </div>

              <div class="form-group">
                <label for="">Pegawai Awam</label>
                <input type="number" class="form-control" name="awam" min="0" max="99999"/>
              </div>

              <div class="form-group">
                <label for="">Pegawai Petugas</label>
                <input type="number" class="form-control" name="petugas" min="0" max="99999"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Tambah"/>

            </div>
          </form>

          <a href="/tenagapkob/show" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a>

        </div>
      </div>
    </div>
</div>


@endsection