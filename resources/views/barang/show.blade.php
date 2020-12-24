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

          <form role="form" method="POST" action="{{action('BarangController@store')}}">
            {{csrf_field()}}
            <div class="card-body">
            <div class="form-group">
                  
                  <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('Jenis Barang') }}</label>
                  <select id="jenis" name="jenis" class="form-control @error('jenis') is-invalid @enderror" required>
                             @foreach($barangh as $barang)
                            <option value="{{ $barang->nama }}">{{ $barang->nama }}</option>
                             @endforeach
                  </select>
    
                  </div>

              <div class="form-group">
                <label for="">Nama Barang</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

              <div class="form-group">
                <label for="">Unit Ukuran</label>
                <input type="text" class="form-control" name="uom"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>

            </div>
          </form>
        

          <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                            <th scope="col">Kemaskini</th>
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Unit Ukuran</th>
                            <th scope="col">Kemaskini oleh</th>
                            <th scope="col">Kemaskini pada</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($barangs as $barang)
                          <tr>
                              <td><a href="/barang/{{$barang->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
                              <td>{{$barang->jenis}}</td>
                              <td>{{$barang->nama}}</td>
                              <td>{{$barang->uom}}</td>
                              <td>{{$barang->name}}</td>
                              <td>{{$barang->updated_at}}</td>
                        @endforeach
                             
                          </tr>
                          
                        </tbody>
            </table>




        </div>
      </div>
    </div>
</div>

@endsection