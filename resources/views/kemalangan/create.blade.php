@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:white; height:300px">
          <div class="card-header" style="background-color:#c11a1a">
            <h3 class="card-title" style="color:white">Urus Jenis Kemalangan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('KemalanganController@store')}}">
            {{csrf_field()}}
       
            <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>

            <tr>
            <td width="100px">Kod Jenis Kemalangan<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"> <input type="text" class="form-control" name="kod"/></td>
            </tr>

            <tr>
            <td width="100px">Nama Jenis Kemalangan<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"> <input type="text" class="form-control" name="nama"/></td>
            </tr>

            <tr>
            <td width="100px">Keterangan<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"> <input type="text" class="form-control" name="keterangan"/></td>
            </tr>

            </tbody>
            </table>
            </div>

            <br>
           <center> <input type="submit" name="submit" class="btn btn-small" style="background-color:white; border:1px solid #555555"  value="Tambah"/>
           <input type="reset" name="reset" class="btn btn-small" style="background-color:#c11a1a; color:white; border:1px solid black" value="Batal"/></center>

          </form>
          </div>
          <center><button style="border:1px solid black"><a href="/kemalangan/show" class= "btn btn-small">Lihat Semua</a></button></center>
      </div>
    </div>
</div>

@endsection