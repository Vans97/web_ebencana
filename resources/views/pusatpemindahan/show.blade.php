@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Definasi Kampung</h3>
          </div>

          <form role="form" method="POST" action="{{action('PusatPemindahanController@store')}}">
            {{csrf_field()}}
            <div class="card-body">

          
              <div class="form-group"> 
              <label for="jajahan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="pjajahan" name="pjajahan" class="pjajahan form-control @error('pjajahan') is-invalid @enderror" onchange="bindKod()" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($pjajahan as $jajahan)
                        <option value="{{ $jajahan->kod }}">{{ $jajahan->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group"> 
              <label for="jajahan" class="col-md-0 col-form-label text-md-right">{{ __('Daerah') }}</label>
              <select id="pdaerah" name="pdaerah" class="form-control @error('pdaerah') is-invalid @enderror" onchange="bindKod2()" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($pdaerah as $daerah)
                        <option value="{{ $daerah->kod }}">{{ $daerah->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group">
                <label for="">Kod Pusat</label>
                <input type="text" class="form-control" name="fkod" readonly/>
                <input type="text" class="form-control" name="mkod" readonly/>
                <input type="text" class="form-control" name="lkod" value="P"/>
              </div>

              <div class="form-group">
                <label for="">Nama Pusat</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

              <div class="form-group">
                <label for="">Had Muatan</label>
                <input type="number" class="form-control" name="had"/>
              </div>

              <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Tambah"/>

            </div>
          </form>

          <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                            <th scope="col">Kemaskini</th>
                            <th scope="col">Kod Pusat</th>
                            <th scope="col">Jajahan</th>
                            <th scope="col">Daerah</th>
                            <th scope="col">Nama Pusat</th>
                            <th scope="col">Had Muatan</th>
                            <th scope="col">Kemaskini oleh</th>
                            <th scope="col">Kemaskini pada</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($pusats as $pusat)
                          <tr>
                              <td><a href="/pusatpemindahan/{{$pusat->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
                              <td>{{$pusat->pjajahan}}-{{$pusat->pdaerah}}-{{$pusat->lkod}}</td>
                              <td>{{$pusat->jah}}</td>
                              <td>{{$pusat->dah}}</td>
                              <td>{{$pusat->pp}}</td>
                              <td>{{$pusat->had}}</td>
                              <td>{{$pusat->name}}</td>
                              <td>{{$pusat->updated_at}}</td>
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
    var x = document.getElementById("pjajahan").value;
    document.querySelector("input[name='fkod']").value = x;
  }
</script>

<script>
  function bindKod2(){
    var x = document.getElementById("pdaerah").value;
    document.querySelector("input[name='mkod']").value = x;
  }
</script>
@endsection