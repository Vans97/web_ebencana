@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Definasi Jajahan</h3>
          </div>

          <form role="form" method="POST" action="{{action('TenagaPkobController@store')}}">
            {{csrf_field()}}
            <div class="card-body">

           
             <div class="form-group">
                <label for="">Tahun</label>
                <input type="text" class="form-control" name="tahun" pattern="[0-9]{4}" title="Tahun mestilah dalam angka" />
              </div>

              <div class="form-group">
                  
              <label for="pkob" class="col-md-0 col-form-label text-md-right">{{ __('PKOB') }}</label>
              <select id="pkob" name="pkob" class="form-control @error('pkob') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($pkobc as $pkob)
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

            </div>
          </form>
        

          <table class="table table-bordered">
                        <thead class="thead-dark">
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
                              <td><a href="/tenagapkob/{{$pkob->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
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