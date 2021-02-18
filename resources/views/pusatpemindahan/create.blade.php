@extends('layouts.super')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Urus Pusat Pemindahan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('PusatPemindahanController@store')}}">
            {{csrf_field()}}
            <div class="card-body">

          
              <div class="form-group"> 
              <label for="jajahan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="pjajahan" name="pjajahan" class="pjajahan form-control @error('pjajahan') is-invalid @enderror" onchange="bindKod()" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($pjajahan as $jajahan)
                        <option value="{{ $jajahan->kod }}">{{ $jajahan->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group"> 
              <label for="jajahan" class="col-md-0 col-form-label text-md-right">{{ __('Daerah') }}</label>
              <select id="pdaerah" name="pdaerah" class="form-control @error('pdaerah') is-invalid @enderror" onchange="bindKod2()" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($pdaerah as $daerah)
                        <option value="{{ $daerah->kod }}">{{ $daerah->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group">
                <label for="">Kod Pusat</label>
                <input type="text" class="form-control" name="fkod" readonly/>
                <input type="text" class="form-control" name="mkod" readonly/>
                <input type="text" class="form-control" name="lkod" value="P"/>
              </div>

              <div class="form-group">
                <label for="">Nama Pusat</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

              <div class="form-group">
                <label for="">Had Muatan</label>
                <input type="number" class="form-control" name="had"/>
              </div>

              <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Tambah"/>

            </div>
          </form>

          <a href="/pusatpemindahan/show" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a>

        </div>
      </div>
    </div>
</div>


<script>
  function bindKod(){
    var x = document.getElementById("pjajahan").value;
    document.querySelector("input[name='fkod']").value = x;
  }
</script>

<script>
  function bindKod2(){
    var x = document.getElementById("pdaerah").value;
    document.querySelector("input[name='mkod']").value = x;
  }
</script>

@endsection