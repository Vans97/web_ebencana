@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:#F1F3F9">
        
          <div class="card-header">
            <h3 class="card-title">Urus Helikopter</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('HelikopterController@store')}}">
            {{csrf_field()}}
            <!-- <div class="card-body">


              <div class="form-group">
                  
              <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="hjajahan" name="hjajahan" class="form-control @error('hjajahan') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($helikopters as $helikopter)
                        <option value="{{ $helikopter->nama }}">{{ $helikopter->nama }}</option>
                         @endforeach
              </select>

              </div>

              <div class="form-group">
                <label for="">Lokasi</label>
                <input type="text" class="form-control" name="lokasi" />
              </div>

              <div class="form-group">
                <label for="">Latitude</label>
                <input type="text" class="form-control" name="latitude"/>
              </div>

              <div class="form-group">
                <label for="">Longitude</label>
                <input type="text" class="form-control" name="longitude"/>
              </div>

              <div class="form-group">
                <label for="">Nota</label>
                <input type="text" class="form-control" name="nota"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Tambah"/>

            </div> -->
            <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>

            <tr>
            <th width="100px">Jajahan<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"><select id="hjajahan" name="hjajahan" class="form-control @error('hjajahan') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($helikopters as $helikopter)
                        <option value="{{ $helikopter->nama }}">{{ $helikopter->nama }}</option>
                         @endforeach
              </select></td>
            </tr>

            <tr>
            <th>Lokasi<font color="red">*</font></th>
            <th>:</th>
            <td><input type="text" class="form-control" name="lokasi"/></td>
            </tr>

            <tr>
            <th>Latitude<font color="red">*</font></th>
            <th>:</th>
            <td><input type="text" class="form-control" name="latitude"/></td>
            </tr>

            <tr>
            <th>Longitude<font color="red">*</font></th>
            <th>:</th>
            <td><input type="text" class="form-control" name="longitude"/></td>
            </tr>

            <tr>
            <th>Nota<font color="red">*</font></th>
            <th>:</th>
            <td><input type="text" class="form-control" name="nota"/></td>
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
          <center><button><a href="/helikopter/show" class= "btn btn-small"  style="color:black">Lihat Semua</a></button></center>

          </div>
    </div>
</div>

@endsection