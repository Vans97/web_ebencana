@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-11" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Urus Kemasukkan Kes Kemalangan</h3>
          </div>

          <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                            <th scope="col">Kemaskini</th>
                            <th scope="col">Tarikh Lapor</th>
                            <th scope="col">Jajahan</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Kemalangan</th>
                            <th scope="col">Nama Mangsa</th>
                            <th scope="col">Kad Pengenalan</th>
                            <th scope="col">kemas oleh</th>
                            <th scope="col">kemakini pada</th>
                            <th scope="col">Pengesahan</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($kemalangans as $kemalangan)
                          <tr>
                              <td><a href="/kemalanganpengesahan/{{$kemalangan->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
                              <td>{{$kemalangan->t_lapor}}</td>
                              <td>{{$kemalangan->jajahan}}</td>
                              <td>{{$kemalangan->lokasi}}</td>
                              <td>{{$kemalangan->kemalangan}}</td>
                              <td>{{$kemalangan->nama_mangsa}}</td>
                              <td>{{$kemalangan->ic}}</td>
                              <td>{{$kemalangan->name}}</td>
                              <td>{{$kemalangan->updated_at}}</td>
                              <td>{{$kemalangan->pengesahan}}</td>
                        @endforeach
                             
                          </tr>
                          
                        </tbody>
                      </table>
        </div>
      </div>
    </div>
</div>

@endsection