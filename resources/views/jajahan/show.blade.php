@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:#F1F3F9">
        
          <div class="card-header">
            <h3 class="card-title">Definasi Jajahan</h3>
          </div>

          <form role="form" method="POST" action="{{action('JajahanController@store')}}">
            {{csrf_field()}}
         
              <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>

            <tr>
            <th width="100px">Kod Jajahan<font color="red">*</font></th>
            <th width="10px">:</th>
            <td width="650px"> <input type="text" class="form-control" name="kod"/></td>
            </tr>

            <tr>
            <th>Nama Jajahan<font color="red">*</font></th>
            <th>:</th>
            <td><input type="text" class="form-control" name="nama"/></td>
            </tr>

            <tr>
            <th>Keterangan<font color="red">*</font></th>
            <th>:</th>
            <td><input type="text" class="form-control" name="keterangan"/></td>
            </tr>

            <tr>
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="submit" class="btn btn-small btn-outline-dark" style="background-color:white"  value="Tambah"/>
            <input type="reset" name="reset" class="btn btn-small btn-outline-red" style="background-color:#FF0000" value="Batal"/></td>
            <!-- <td><input type="text" class="form-control" name="keterangan"/></td> -->
            </tr>

            </tbody>
            </table>

            </div>
          </form>
        

          <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                            <th scope="col">Kemaskini</th>
                            <th scope="col">Kod</th>
                            <th scope="col">Nama</th>
                            <th scope="col">kemas oleh</th>
                            <th scope="col">kemakini pada</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($jajahans as $jajahan)
                          <tr>
                              <td><a href="/jajahan/{{$jajahan->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
                              <td>{{$jajahan->kod}}</td>
                              <td>{{$jajahan->nama}}</td>
                              <td>{{$jajahan->name}}</td>
                              <td>{{$jajahan->updated_at}}</td>
                        @endforeach
                             
                          </tr>
                          
                        </tbody>
                      </table>




        </div>
      </div>
    </div>
</div>

@endsection