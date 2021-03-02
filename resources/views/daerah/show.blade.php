@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Definasi Daerah</h3>
          </div>

          <form role="form" method="POST" action="{{action('DaerahController@store')}}">
            {{csrf_field()}}
            <div class="card-body">


              <div class="form-group">
                  
              <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="djajahan" name="djajahan" class="form-control @error('djajahan') is-invalid @enderror" onchange="bindKod()" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($daerahj as $daerah)
                        <option value="{{ $daerah->kod }}">{{ $daerah->nama }}</option>
                         @endforeach
              </select>

              </div>

              <div class="form-group">
                <label for="">Kod Daerah</label>
                <input type="text" class="form-control" name="fkod"/>
                <input type="text" class="form-control" name="kod" />
              </div>

              <div class="form-group">
                <label for="">Nama Daerah</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Tambah"/>

            </div>
          </form>
        

          <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                            <th scope="col">Kemaskini</th>
                            <th scope="col">Jajahan</th>
                            <th scope="col">Kod Daerah</th>
                            <th scope="col">Nama Daerah</th>
                            <th scope="col">Kemaskini oleh</th>
                            <th scope="col">Kemaskini pada</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($daerahs as $daerah)
                          <tr>
                              <td><a href="/daerah/{{$daerah->kod}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
                              <td>{{$daerah->jah}}</td>
                              <td>{{$daerah->djajahan}}-{{$daerah->kod}}</td>
                              <td>{{$daerah->nama}}</td>
                              <td>{{$daerah->name}}</td>
                              <td>{{$daerah->updated_at}}</td>
                        @endforeach
                             
                          </tr>
                          
                        </tbody>
            </table>




        </div>
      </div>
    </div>
</div>

<script>
  function bindKod(){
    var x = document.getElementById("djajahan").value;
    document.querySelector("input[name='fkod']").value = x;
  }
</script>
@endsection