@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Definasi PKOB</h3>
          </div>

          <form role="form" method="POST" action="{{action('PkobController@store')}}">
            {{csrf_field()}}
            <div class="card-body">
              <div class="form-group">
                <label for="">Kod PKOB</label>
                <input type="text" class="form-control" name="kod"/>
              </div>

              <div class="form-group">
                <label for="">Nama PKOB</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>

            </div>
          </form>
        

          <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                            <th scope="col">Kemaskini</th>
                            <th scope="col">Kod</th>
                            <th scope="col">Nama</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($pkobs as $pkob)
                          <tr>
                              <td><a href="/pkob/{{$pkob->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
                              <td>{{$pkob->kod}}</td>
                              <td>{{$pkob->nama}}</td>
                        @endforeach
                             
                          </tr>
                          
                        </tbody>
                      </table>




        </div>
      </div>
    </div>
</div>

@endsection