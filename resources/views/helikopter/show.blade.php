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

          <form role="form" method="POST" action="{{action('HelikopterController@store')}}">
            {{csrf_field()}}
            <div class="card-body">


              <div class="form-group">
                  
              <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="hjajahan" name="hjajahan" class="form-control @error('hjajahan') is-invalid @enderror" required>
                         @foreach($jajahanj as $jajahan)
                        <option value="{{ $jajahan->nama }}">{{ $jajahan->nama }}</option>
                         @endforeach
              </select>

              </div>

              <div class="form-group">
                <label for="">Lokasi</label>
                <input type="text" class="form-control" name="lokasi" />
              </div>

              <div class="form-group">
                <label for="">Latitude</label>
                <input type="text" class="form-control" name="latitude"/>
              </div>

              <div class="form-group">
                <label for="">Longitude</label>
                <input type="text" class="form-control" name="longitude"/>
              </div>

              <div class="form-group">
                <label for="">Nota</label>
                <input type="text" class="form-control" name="nota"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>

            </div>
          </form>
        

          <table class="table table-bordered">
                        <thead class="thead-dark">
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
                              <td><a href="/helikopter/{{$helikopter->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
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