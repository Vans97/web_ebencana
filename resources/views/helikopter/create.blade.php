@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Definasi Helikopter</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('HelikopterController@store')}}">
            {{csrf_field()}}
            <div class="card-body">


              <div class="form-group">
                  
              <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="hjajahan" name="hjajahan" class="form-control @error('hjajahan') is-invalid @enderror" required>
                         @foreach($helikopters as $helikopter)
                        <option value="{{ $helikopter->nama }}">{{ $helikopter->nama }}</option>
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

          <a href="/helikopter/show" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a>

        </div>
      </div>
    </div>
</div>


@endsection