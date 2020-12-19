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

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>

            </div>
          </form>

          <a href="/jajahan/show" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a>

        </div>
      </div>
    </div>
</div>

@endsection