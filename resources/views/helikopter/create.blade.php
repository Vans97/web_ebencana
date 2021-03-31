@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:white; height:350px">
          <div class="card-header" style="background-color:#c11a1a">
            <h3 class="card-title" style="color:white">Urus Tapak Helikopter</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('HelikopterController@store')}}">
            {{csrf_field()}}
            
            <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>

            <tr>
            <td width="100px">Jajahan<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"><select id="hjajahan" name="hjajahan" class="form-control @error('hjajahan') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($helikopters as $helikopter)
                        <option value="{{ $helikopter->nama }}">{{ $helikopter->nama }}</option>
                         @endforeach
              </select></td>
            </tr>

            <tr>
            <td>Lokasi<font color="red">*</font></td>
            <td>:</td>
            <td><input type="text" class="form-control" name="lokasi"/></td>
            </tr>

            <tr>
            <td>Latitud<font color="red">*</font></td>
            <td>:</td>
            <td><input type="text" class="form-control" name="latitude"/></td>
            </tr>

            <tr>
            <td>Longitud<font color="red">*</font></td>
            <td>:</td>
            <td><input type="text" class="form-control" name="longitude"/></td>
            </tr>

            <tr>
            <td>Nota<font color="red">*</font></td>
            <td>:</td>
            <td><input type="text" class="form-control" name="nota"/></td>
            </tr>

            </tbody>
            </table>
            </div>

            <br>
           <center> <input type="submit" name="submit" class="btn btn-small" style="background-color:white; border:1px solid #555555"  value="Tambah"/>
           <input type="reset" name="reset" class="btn btn-small" style="background-color:#c11a1a; color:white; border:1px solid black" value="Batal"/></center>

          </form>
        </div>
          <center><button style="border:1px solid black"><a href="/helikopter/show" class= "btn btn-small">Lihat Semua</a></button></center>

          </div>
    </div>
</div>

@endsection