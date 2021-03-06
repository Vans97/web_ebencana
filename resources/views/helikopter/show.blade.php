@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:white; height:350px">
          <div class="card-header" style="background-color:#c11a1a">
            <h3 class="card-title" style="color:white">Urus Tapak Helikopter</h3>
          </div>

          <form role="form" method="POST" action="{{action('HelikopterController@store')}}">
            {{csrf_field()}}
            
            <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>

            <tr>
            <td width="100px">Jajahan<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"><select id="hjajahan" name="hjajahan" class="form-control @error('hjajahan') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($jajahanj as $jajahan)
                        <option value="{{ $jajahan->nama }}">{{ $jajahan->nama }}</option>
                         @endforeach
              </select></td>
            </tr>

            <tr>
            <td>Lokasi<font color="red">*</font></td>
            <td>:</td>
            <td><input type="text" class="form-control" name="lokasi"/></td>
            </tr>

            <tr>
            <td>Latitud<font color="red">*</font></td>
            <td>:</td>
            <td><input type="text" class="form-control" name="latitude"/></td>
            </tr>

            <tr>
            <td>Longitud<font color="red">*</font></td>
            <td>:</td>
            <td><input type="text" class="form-control" name="longitude"/></td>
            </tr>

            <tr>
            <td>Nota<font color="red">*</font></td>
            <td>:</td>
            <td><input type="text" class="form-control" name="nota"/></td>
            </tr>

            </tbody>
            </table>
            </div>

            <br>
           <center> <input type="submit" name="submit" class="btn btn-small" style="background-color:white; border:1px solid #555555"  value="Tambah"/>
           <input type="reset" name="reset" class="btn btn-small" style="background-color:#c11a1a; color:white; border:1px solid black" value="Batal"/></center>

          </form><br>
        </div>
        <div class="card" style="background-color:white">
        <table class="table table-bordered">
              <thead  style="background-color:#c11a1a; color:white">
                <tr>
                            
                    <th scope="col">Kemaskini</th>
                    <th scope="col">Jajahan</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Latitude</th>
                    <th scope="col">Longitude</th>
                    <th scope="col">Nota</th>
                    <th scope="col">Kemaskini oleh</th>
                    <th scope="col">Kemaskini pada</th>
                    
                  </tr>
                </thead>
              
                <tbody>
                  @foreach($helikopters as $helikopter)
                  <tr>
                      <td><a href="/helikopter/{{$helikopter->id}}/edit" class= "btn btn-small" style="background-color:#c11a1a"><i class="fa fa-edit" style="color:white"></i></a></td>
                      <td>{{$helikopter->hjajahan}}</td>
                      <td>{{$helikopter->lokasi}}</td>
                      <td>{{$helikopter->latitude}}</td>
                      <td>{{$helikopter->longitude}}</td>
                      <td>{{$helikopter->nota}}</td>
                      <td>{{$helikopter->name}}</td>
                      <td>{{$helikopter->updated_at}}</td>
                @endforeach
                      
                  </tr>
                  
                </tbody>
            </table>
        </div>
      </div>
    </div>
</div>

@endsection