@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:white; height:350px">
          <div class="card-header" style="background-color:#c11a1a">
            <h3 class="card-title" style="color:white">Tenaga Kerja PKOB</h3>
          </div>

          <form role="form" method="POST" action="{{action('TenagaPkobController@store')}}">
            {{csrf_field()}}
            

            <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>

            <tr>
            <td width="100px">Tahun<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"> <input type="number" class="form-control" name="tahun" pattern="[0-9]{4}" title="Tahun mestilah dalam angka"/></td>
            </tr>

            <tr>
            <td width="100px">PKOB<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"><select id="pkob" name="pkob" class="form-control @error('pkob') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($pkobc as $pkob)
                        <option value="{{ $pkob->nama }}">{{ $pkob->nama }}</option>
                         @endforeach
              </select></td>
            </tr>

            <tr>
            <td width="150px">Pegawai Pengawal<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"> <input type="number" class="form-control" name="pengawal" min="0" max="99999"/></td>
            </tr>

            <tr>
            <td width="100px">Pegawai Awam<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"> <input type="number" class="form-control" name="awam" min="0" max="99999"/></td>
            </tr>

            <tr>
            <td width="130px">Pegawai Petugas<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"> <input type="number" class="form-control" name="petugas" min="0" max="99999"/></td>
            </tr>

            </tbody>
            </table>
            </div>

            <br>
            <center> <input type="submit" name="submit" class="btn btn-small" style="background-color:white; border:1px solid #555555"  value="Tambah"/>
           <input type="reset" name="reset" class="btn btn-small" style="background-color:#c11a1a; color:white; border:1px solid black" value="Batal"/></center>

          </form><br>
        
        </div>

        <div class="card" style="background-color:white">
        <table class="table table-bordered">
              <thead  style="background-color:#c11a1a; color:white">
                <tr>
                            
                  <th scope="col">Kemaskini</th>
                  <th scope="col">Tahun</th>
                  <th scope="col">PKOB</th>
                  <th scope="col">Pengawal</th>
                  <th scope="col">Awam</th>
                  <th scope="col">Petugas</th>
                  <th scope="col">Kemaskini oleh</th>
                  <th scope="col">Kemaskini pada</th>
                  
                </tr>
              </thead>
            
              <tbody>
                @foreach($pkobs as $pkob)
                <tr>
                    <td><a href="/tenagapkob/{{$pkob->id}}/edit" class= "btn btn-small" style="background-color:#c11a1a"><i class="fa fa-edit" style="color:white"></i></a></td>
                    <td>{{$pkob->tahun}}</td>
                    <td>{{$pkob->pkob}}</td>
                    <td>{{$pkob->pengawal}}</td>
                    <td>{{$pkob->awam}}</td>
                    <td>{{$pkob->petugas}}</td>
                    <td>{{$pkob->name}}</td>
                    <td>{{$pkob->updated_at}}</td>
              @endforeach
                    
                </tr>
                
              </tbody>
            </table>
        </div>
      </div>
    </div>
</div>

@endsection