@extends('layouts.super')

@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-11" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Maklumat Menyelamat</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                            <th scope="col">Kemaskini</th>
                            <th scope="col">Jajahan</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Tempat Pemindahan </th>
                            <th scope="col">Jumlah</th>
                            
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($menyelamats as $menyelamat)
                          <tr>
                              <td><a href="/menyelamatlaporan/{{$menyelamat->id}}" class= "btn btn-small bg-gradient-primary">Butiran</i></a></td> 
                              <td>{{$menyelamat->jajahan}}</td>
                              <td>{{$menyelamat->lokasi}}</td>
                              <td>{{$menyelamat->tempat_pemindahan}}</td> 
                              <td>{{$menyelamat->total}}</td>
                             

                              
                        @endforeach
                          </tr>

                        </tbody>
                      </table>
        </div>
      </div>
    </div>
</div>

@endsection