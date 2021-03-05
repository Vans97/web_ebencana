@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Kelengkapan Agensi</h3>
          </div>

          <form role="form" method="POST" action="{{action('KelengkapanAgensiController@store')}}">
            {{csrf_field()}}
            <div class="card-body">


              <div class="form-group">
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

            </div>
          </form>
        

          <table class="table table-bordered">
                        <thead class="thead-dark">
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
                              <td><a href="/kelengkapanagensi/{{$kelengkapan->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
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