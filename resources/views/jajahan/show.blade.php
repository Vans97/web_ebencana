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

          <form role="form" method="POST" action="{{action('JajahanController@store')}}">
            {{csrf_field()}}
            <div class="card-body">
              <div class="form-group">
                <label for="">Kod Jajahan</label>
                <input type="text" class="form-control" name="kod"/>
              </div>

              <div class="form-group">
                <label for="">Nama Jajahan</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

              <div class="form-group">
                <label for="">keterangan</label>
                <input type="text" class="form-control" name="keterangan"/>
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
                            <th scope="col">kemas oleh</th>
                            <th scope="col">kemakini pada</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($jajahans as $jajahan)
                          <tr>
                              <td><a href="/jajahan/{{$jajahan->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
                              <td>{{$jajahan->kod}}</td>
                              <td>{{$jajahan->nama}}</td>
                              <td>{{$jajahan->name}}</td>
                              <td>{{$jajahan->updated_at}}</td>
                        @endforeach
                             
                          </tr>
                          
                        </tbody>
                      </table>




        </div>
      </div>
    </div>
</div>

@endsection