@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:#F1F3F9">
        
          <div class="card-header">
            <h3 class="card-title">Urus Kelengkapan Agensi</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('KelengkapanAgensiController@store')}}">
            {{csrf_field()}}
            <!-- <div class="card-body"> -->
            
              <!-- <div class="form-group">
              <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('Jabatan') }}</label>
              <select id="kjabatan" name="kjabatan" class="form-control @error('kjabatan') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($agensis as $agensi)
                        <option value="{{ $agensi->nama }}">{{ $agensi->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group">
              <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('PKOB') }}</label>
              <select id="kpkob" name="kpkob" class="form-control @error('kpkob') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($pkobs as $pkob)
                        <option value="{{ $pkob->nama }}">{{ $pkob->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group">
              <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('Aset') }}</label>
              <select id="kaset" name="kaset" class="form-control @error('kaset') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($asets as $aset)
                        <option value="{{ $aset->nama }}">{{ $aset->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group">
                <label for="">Kuantiti</label>
                <input type="number" class="form-control" name="kuantiti" min="0" max="9999999"/>
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
            <th width="100px">Jabatan<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px">  <select id="kjabatan" name="kjabatan" class="form-control @error('kjabatan') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($agensis as $agensi)
                        <option value="{{ $agensi->nama }}">{{ $agensi->nama }}</option>
                         @endforeach
              </select></td>
            </tr>

            <tr>
            <th width="100px">PKOB<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"> <select id="kpkob" name="kpkob" class="form-control @error('kpkob') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($pkobs as $pkob)
                        <option value="{{ $pkob->nama }}">{{ $pkob->nama }}</option>
                         @endforeach
              </select></td>
            </tr>

            <tr>
            <th width="100px">Aset<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"> <select id="kaset" name="kaset" class="form-control @error('kaset') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($asets as $aset)
                        <option value="{{ $aset->nama }}">{{ $aset->nama }}</option>
                         @endforeach
              </select></td>
            </tr>

            <tr>
            <th>Kuantiti<font color="red">*</font></th>
            <th>:</th>
            <td><input type="number" class="form-control" name="kuantiti" min="0" max="9999999"/></td>
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
          <center><button><a href="/kelengkapanagensi/show" class= "btn btn-small"  style="color:black">Lihat Semua</a></button></center>
        </div>
    </div>
</div>

@endsection