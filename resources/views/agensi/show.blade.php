@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:white">
          <div class="card-header" style="background-color:#c11a1a">
            <h3 class="card-title" style="color:white">Definasi Agensi & Jabatan</h3>
          </div>

          <form role="form" method="POST" action="{{action('AgensiController@store')}}">
            {{csrf_field()}}


            <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>

            <tr>
            <td width="100px">Kod Jabatan<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"> <input type="text" class="form-control" name="kod"/></td>
            </tr>

            <tr>
            <td width="100px">Nama Jabatan<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"> <input type="text" class="form-control" name="nama"/></td>
            </tr>

            <tr>
            <td width="100px">Talian Kecemasan<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"> <input type="text" class="form-control" name="talian"/></td>
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
                            <th scope="col">Kod</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Talian Kecemasan</th>
                            <th scope="col">Kemaskini oleh</th>
                            <th scope="col">Kemaskini pada</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($agensis as $agensi)
                          <tr>
                              <td><a href="/agensi/{{$agensi->id}}/edit" class= "btn btn-small" style="background-color:#c11a1a"><i class="fa fa-edit" style="color:white"></i></a></td>
                              <td>{{$agensi->kod}}</td>
                              <td>{{$agensi->nama}}</td>
                              <td>{{$agensi->talian}}</td>
                              <td>{{$agensi->name}}</td>
                              <td>{{$agensi->updated_at}}</td>
                        @endforeach
                             
                          </tr>
    
                        </tbody>
                      </table>
        </div>
      </div>
    </div>
</div>

@endsection