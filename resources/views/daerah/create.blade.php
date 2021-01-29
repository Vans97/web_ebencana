@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Urus Jajahan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('DaerahController@store')}}">
            {{csrf_field()}}
            <div class="card-body">

          
              <div class="form-group">
                  
              <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="djajahan" name="djajahan" class="form-control @error('djajahan') is-invalid @enderror" onchange="bindKod()" required>
                         @foreach($daerah as $daerahs)
                        <option value="{{ $daerahs->kod }}">{{ $daerahs->nama }}</option>
                         @endforeach
              </select>

              </div>

              <div class="form-group">
                <label for="">Kod Daerah</label>
                <input type="text" class="form-control" name="kod" />
                <input type="text" class="form-control" name="lkod" />
              </div>

              <div class="form-group">
                <label for="">Nama Daerah</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>

            </div>
          </form>

          <a href="/daerah/show" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a>

        </div>
      </div>
    </div>
</div>
<script>
  function bindKod(){
    var x = document.getElementById("djajahan").value;
    document.querySelector("input[name='kod']").value = x;
  }
</script>

@endsection