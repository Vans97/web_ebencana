@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Definasi Agensi & Jabatan</h3>
          </div>

          <form role="form" method="POST" action="{{action('AgensiController@store')}}">
            {{csrf_field()}}
            <div class="card-body">
              <div class="form-group">
                <label for="">Kod Jabatan</label>
                <input type="text" class="form-control" name="kod"/>
              </div>

              <div class="form-group">
                <label for="">Nama Jabatan</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

              <div class="form-group">
                <label for="">No Talian Kecemansan</label>
                <input type="text" class="form-control" name="talian" pattern="[0-9]{9}" title="No Talian mestilah 9 angka"/>
              </div>
  
              <input type="submit" name="submit" class="btn btn-primary" value="Tambah"/>

            </div>
          </form>
        

          <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                            <th scope="col">Kemaskini</th>
                            <th scope="col">Kod</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Talian Kecemasan</th>
                            <th scope="col">Kemaskini oleh</th>
                            <th scope="col">Kemaskini pada</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($agensis as $agensi)
                          <tr>
                              <td><a href="/agensi/{{$agensi->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
                              <td>{{$agensi->kod}}</td>
                              <td>{{$agensi->nama}}</td>
                              <td>{{$agensi->talian}}</td>
                              <td>{{$agensi->name}}</td>
                              <td>{{$agensi->updated_at}}</td>
                        @endforeach
                             
                          </tr>
                          
                        </tbody>
                      </table>




        </div>
      </div>
    </div>
</div>

@endsection