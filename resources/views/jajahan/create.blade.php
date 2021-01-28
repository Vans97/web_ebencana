@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:#F1F3F9">
        
          <div class="card-header">
            <h3 class="card-title">Urus Jajahan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('JajahanController@store')}}">
            {{csrf_field()}}
            <!-- <div class="card-body">
              <div class="form-group">
                <label for="">Kod Jajahan</label>
                <input type="text" class="form-control" name="kod"/>
              </div>

              <div class="form-group">
                <label for="">Nama Jajahan</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

              <div class="form-group">
                <label for="">keterangan</label>
                <input type="text" class="form-control" name="keterangan"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>

            </div> -->
            <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>

            <tr>
            <th width="100px">Kod Jajahan<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"> <input type="text" class="form-control" name="kod"/></td>
            </tr>

            <tr>
            <th>Nama Jajahan<font color="red">*</font></th>
            <th>:</th>
            <td><input type="text" class="form-control" name="nama"/></td>
            </tr>

            <tr>
            <th>Keterangan<font color="red">*</font></th>
            <th>:</th>
            <td><input type="text" class="form-control" name="keterangan"/></td>
            </tr>

            <tr>
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="submit" class="btn btn-small btn-outline-dark" style="background-color:white"  value="Tambah"/>
            <input type="reset" name="reset" class="btn btn-small btn-outline-red" style="background-color:#FF0000" value="Batal"/></td>
            <!-- <td><input type="text" class="form-control" name="keterangan"/></td> -->
            </tr>

            </tbody>
            </table>
            </div>
          </form>


        </div>
          <center><a href="/jajahan/show" class= "btn btn-small btn-outline-dark" style="background-color:white">Lihat Semua</a></center>

      </div>
    </div>
</div>

@endsection