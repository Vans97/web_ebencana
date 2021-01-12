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
            <h3 class="card-title">Laporan Menyelamat</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                           
                            <th scope="col">Tarikh</th>
                            <th scope="col">Jajahan</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Tempat Pemindahan </th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Kemas oleh</th>
                            <th scope="col">Kemakini Pada</th>
                            <th scope="col">Status</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($menyelamats as $menyelamat)
                          <tr>
                              
                              <td>{{$menyelamat->tarikh}}</td>
                              <td>{{$menyelamat->jajahan}}</td>
                              <td>{{$menyelamat->lokasi}}</td>
                              <td>{{$menyelamat->tempat_pemindahan}}</td> 
                              <td>{{$menyelamat->total}}</td>
                              <td>{{$menyelamat->name}}</td>
                              <td>{{$menyelamat->updated_at}}</td>
                              <td>{{$menyelamat->pengesahan}}</td>

                              
                        @endforeach
                          </tr>

                        </tbody>
                      </table>
        </div>
      </div>
    </div>
</div>

@endsection