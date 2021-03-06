@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:white; height:350px">
          <div class="card-header" style="background-color:#c11a1a">
            <h3 class="card-title" style="color:white">Urus Kelengkapan Agensi</h3>
          </div>

          <form role="form" method="POST" action="{{action('KelengkapanAgensiController@store')}}">
            {{csrf_field()}}
            
            <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>

            <tr>
            <td width="100px">Jabatan<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px">  <select id="kjabatan" name="kjabatan" class="form-control @error('kjabatan') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($agensis as $agensi)
                        <option value="{{ $agensi->nama }}">{{ $agensi->nama }}</option>
                         @endforeach
              </select></td>
            </tr>

            <tr>
            <td width="100px">PKOB<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"> <select id="kpkob" name="kpkob" class="form-control @error('kpkob') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($pkobs as $pkob)
                        <option value="{{ $pkob->nama }}">{{ $pkob->nama }}</option>
                         @endforeach
              </select></td>
            </tr>

            <tr>
            <td width="100px">Aset<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"> <select id="kaset" name="kaset" class="form-control @error('kaset') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($asets as $aset)
                        <option value="{{ $aset->nama }}">{{ $aset->nama }}</option>
                         @endforeach
              </select></td>
            </tr>

            <tr>
            <td>Kuantiti<font color="red">*</font></td>
            <td>:</td>
            <td><input type="number" class="form-control" name="kuantiti" min="0" max="9999999"/></td>
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
        <div class="card" style="background-color:white">
        <table class="table table-bordered">
            <thead  style="background-color:#c11a1a; color:white">
              <tr>
                
                <th scope="col">Kemaskini</th>
                <th scope="col">Jabatan</th>
                <th scope="col">PKOB</th>
                <th scope="col">Asset</th>
                <th scope="col">Kuantiti </th>
                <th scope="col">Nota</th>
                <th scope="col">Kemas oleh</th>
                <th scope="col">kemakini pada</th>
                
              </tr>
            </thead>
          
            <tbody>
              @foreach($kelengkapans as $kelengkapan)
              <tr>
                  <td><a href="/kelengkapanagensi/{{$kelengkapan->id}}/edit" class= "btn btn-small" style="background-color:#c11a1a"><i class="fa fa-edit" style="color:white"></i></a></td>
                  <td>{{$kelengkapan->kjabatan}}</td>
                  <td>{{$kelengkapan->kpkob}}</td>
                  <td>{{$kelengkapan->kaset}}</td>
                  <td>{{$kelengkapan->kuantiti}}</td>
                  <td>{{$kelengkapan->nota}}</td>
                  <td>{{$kelengkapan->name}}</td>
                  <td>{{$kelengkapan->updated_at}}</td>
            @endforeach
                  
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

@endsection