@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:#F1F3F9">
        
          <div class="card-header">
            <h3 class="card-title">Urus PKOB</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('PkobController@store')}}">
            {{csrf_field()}}
            <!-- <div class="card-body">
              <div class="form-group">
                <label for="">Kod PKOB</label>
                <input type="text" class="form-control" name="kod"/>
              </div>

              <div class="form-group">
                <label for="">Nama PKOB</label>
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
            <th width="100px">Kod PKOB<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"> <input type="text" class="form-control" name="kod"/></td>
            </tr>

            <tr>
            <th width="100px">Nama PKOB<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"> <input type="text" class="form-control" name="nama"/></td>
            </tr>

            <tr>
            <th width="100px">No Talian Kecemasan<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"> <input type="text" class="form-control" pattern="[0-9]{9}" title="No Talian mestilah 9 angka" name="talian"/></td>
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
          <center><button><a href="/pkob/show" class= "btn btn-small"  style="color:black">Lihat Semua</a></button></center>

          </div>
    </div>
</div>

@endsection