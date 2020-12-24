@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Urus Barang</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('BarangController@store')}}">
            {{csrf_field()}}
            <div class="card-body">
            <div class="form-group">
                  
                  <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('Jenis Barang') }}</label>
                  <select id="jenis" name="jenis" class="form-control @error('jenis') is-invalid @enderror" required>
                             @foreach($barangs as $barang)
                            <option value="{{ $barang->nama }}">{{ $barang->nama }}</option>
                             @endforeach
                  </select>
    
                  </div>

              <div class="form-group">
                <label for="">Nama Barang</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

              <div class="form-group">
                <label for="">Unit Ukuran</label>
                <input type="text" class="form-control" name="uom"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>

            </div>
          </form>

          <a href="/barang/show" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a>

        </div>
      </div>
    </div>
</div>

@endsection