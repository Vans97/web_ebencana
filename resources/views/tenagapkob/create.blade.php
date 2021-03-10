@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:#F1F3F9">
        
          <div class="card-header">
            <h3 class="card-title">Tenaga Kerja PKOB</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('TenagaPkobController@store')}}">
            {{csrf_field()}}
            <!-- <div class="card-body">

           
             <div class="form-group">
                <label for="">Tahun</label>
                <input type="text" class="form-control" name="tahun" pattern="[0-9]{4}" title="Tahun mestilah dalam angka" />
              </div>

              <div class="form-group">
                  
              <label for="pkob" class="col-md-0 col-form-label text-md-right">{{ __('PKOB') }}</label>
              <select id="pkob" name="pkob" class="form-control @error('pkob') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($pkobs as $pkob)
                        <option value="{{ $pkob->nama }}">{{ $pkob->nama }}</option>
                         @endforeach
              </select>

              </div>

              <div class="form-group">
                <label for="">Pegawai Pengawal</label>
                <input type="number" class="form-control" name="pengawal" min="0" max="99999" />
              </div>

              <div class="form-group">
                <label for="">Pegawai Awam</label>
                <input type="number" class="form-control" name="awam" min="0" max="99999"/>
              </div>

              <div class="form-group">
                <label for="">Pegawai Petugas</label>
                <input type="number" class="form-control" name="petugas" min="0" max="99999"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Tambah"/>

            </div> -->

            <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>

            <tr>
            <th width="100px">Tahun<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"> <input type="number" class="form-control" name="tahun" pattern="[0-9]{4}" title="Tahun mestilah dalam angka"/></td>
            </tr>

            <tr>
            <th width="100px">PKOB<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"><select id="pkob" name="pkob" class="form-control @error('pkob') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($pkobs as $pkob)
                        <option value="{{ $pkob->nama }}">{{ $pkob->nama }}</option>
                         @endforeach
              </select></td>
            </tr>

            <tr>
            <th width="150px">Pegawai Pengawal<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"> <input type="number" class="form-control" name="pengawal" min="0" max="99999"/></td>
            </tr>

            <tr>
            <th width="100px">Pegawai Awam<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"> <input type="number" class="form-control" name="awam" min="0" max="99999"/></td>
            </tr>

            <tr>
            <th width="130px">Pegawai Petugas<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"> <input type="number" class="form-control" name="petugas" min="0" max="99999"/></td>
            </tr>

            <tr>
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="submit" class="btn btn-small" style="background-color:white; border:1px solid #555555"  value="Tambah"/>
            <input type="reset" name="reset" class="btn btn-small btn-outline-red" style="background-color:#FF0000; color:white" value="Batal"/></td>
            </tr>

            </tbody>
            </table>
            </div>
          </form>
        </div>

          <center><button><a href="/tenagapkob/show" class= "btn btn-small"  style="color:black">Lihat Semua</a></button></center>
          </div>
    </div>
</div>

@endsection