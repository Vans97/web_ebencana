@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:#F1F3F9">
        
          <div class="card-header">
            <h3 class="card-title">Urus Agensi & Jabatan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('AgensiController@store')}}">
            {{csrf_field()}}
            <!-- <div class="card-body">
              <div class="form-group">
                <label for="">Kod Jabatan</label>
                <input type="text" class="form-control" name="kod"/>
              </div>

              <div class="form-group">
                <label for="">Nama Jabatan</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

              <div class="form-group">
                <label for="">No Talian Kecemasan</label>
                <input type="text" class="form-control" name="talian" pattern="[0-9]{9}" title="No Talian mestilah 9 angka"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Tambah"/>

            </div> -->

            <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>

            <tr>
            <th width="100px">Kod Jabatan<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"> <input type="text" class="form-control" name="kod"/></td>
            </tr>

            <tr>
            <th width="100px">Nama Jabatan<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"> <input type="text" class="form-control" name="nama"/></td>
            </tr>

            <tr>
            <th width="100px">Talian Kecemasan<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"> <input type="text" class="form-control" name="talian"/></td>
            </tr>

            <tr>
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="submit" class="btn btn-small" style="background-color:white; border:1px solid #555555"  value="Tambah"/>
            <input type="reset" name="reset" class="btn btn-small btn-outline-red" style="background-color:#FF0000" value="Batal"/></td>
            </tr>

            </tbody>
            </table>
            </div>
          </form>
        </div>
          <center><button><a href="/agensi/show" class= "btn btn-small"  style="color:black">Lihat Semua</a></button></center>

          </div>
    </div>
</div>

@endsection