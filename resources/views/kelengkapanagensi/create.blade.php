@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Kelengkapan Agensi</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('KelengkapanAgensiController@store')}}">
            {{csrf_field()}}
            <div class="card-body">


              <div class="form-group">
              <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('Jabatan') }}</label>
              <select id="kjabatan" name="kjabatan" class="form-control @error('kjabatan') is-invalid @enderror" required>
                         @foreach($agensis as $agensi)
                        <option value="{{ $agensi->nama }}">{{ $agensi->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group">
              <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('PKOB') }}</label>
              <select id="kpkob" name="kpkob" class="form-control @error('kpkob') is-invalid @enderror" required>
                         @foreach($pkobs as $pkob)
                        <option value="{{ $pkob->nama }}">{{ $pkob->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group">
              <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('Aset') }}</label>
              <select id="kaset" name="kaset" class="form-control @error('kaset') is-invalid @enderror" required>
                         @foreach($asets as $aset)
                        <option value="{{ $aset->nama }}">{{ $aset->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group">
                <label for="">Kuantiti</label>
                <input type="number" class="form-control" name="kuantiti" min="0" max="9999999"/>
                <!-- <input type="number" class="form-control" name="kuantiti" min="0" max="99999"/> -->

              </div>

              <div class="form-group">
                <label for="">Nota</label>
                <input type="text" class="form-control" name="nota"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>

            </div>
          </form>

          <a href="/kelengkapanagensi/show" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a>

        </div>
      </div>
    </div>
</div>

@endsection