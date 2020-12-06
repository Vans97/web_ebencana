@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">PENDAFTARAN AGENSI</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('RoleController@store')}}">
            {{csrf_field()}}
            <div class="card-body">
              <div class="form-group">
                <label for="">Kod Pengguna</label>
                <input type="text" class="form-control" name="kod"/>
              </div>

              <div class="form-group">
                <label for="">Nama Kumpulan</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

              <div class="form-group">
                <label for="">Keterangan</label>
            <input type="text" class="form-control" name="keterangan"/>
              </div>

              <div class="form-group">
                <label for="">Jajahan</label><br>
              
                <input type="checkbox" id="Tanah Merah" name="jajahan" value="Tanah Merah">
                <label for="Tanah Merah"> Tanah Merah</label>

                <input type="checkbox" id="Pasir Puteh" name="jajahan" value="Pasir Puteh">
                <label for="Pasir Puteh"> Pasir Puteh</label>

                <input type="checkbox" id="Kuala Krai" name="jajahan" value="Kuala Krai">
                <label for="Kuala Krai"> Kuala Krai</label><br>

                <input type="checkbox" id="Pasir Mas" name="jajahan" value="Pasir Mas">
                <label for="Pasir Mas"> Pasir Mas</label>

                <input type="checkbox" id="Jeli" name="jajahan" value="Jeli">
                <label for="Jeli"> Jeli</label>

                <input type="checkbox" id="Tumpat" name="jajahan" value="Tumpat">
                <label for="Tumpat"> Tumpat</label><br>

                <input type="checkbox" id="Machang" name="jajahan" value="Machang">
                <label for="Machang"> Machang</label>

                <input type="checkbox" id="Gua Musang" name="jajahan" value="Gua Musang">
                <label for="Gua Musang"> Gua Musang</label>

                <input type="checkbox" id="Bachok" name="jajahan" value="Bachok">
                <label for="Bachok"> Bachok</label><br>

                <input type="checkbox" id="Kota Bharu" name="jajahan" value="Kota Bharu">
                <label for="Kota Bharu"> Kota Bharu</label><br>
              </div>

             
              <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>

            </div>
          </form>
        </div>
      </div>
    </div>
</div>

@endsection