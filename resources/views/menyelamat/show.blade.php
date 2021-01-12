@extends('layouts.super')

@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-11" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Kemasukkan Gerakan Menyelamat</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('MenyelamatController@store')}}">
            {{csrf_field()}}
            <div class="card-body">

              <div class="form-group">
                <label for="">Tarikh</label>
                <input type="datetime-local" class="form-control" name="tarikh" />
              </div>

              <div class="form-group">
              <label for="jajahan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="jajahan" name="jajahan" class="form-control @error('jajahan') is-invalid @enderror" required>
                         @foreach($jajahans as $jajahan)
                        <option value="{{ $jajahan->nama }}">{{ $jajahan->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group">
                <label for="">Lokasi Berlaku</label>
                <input type="text" class="form-control" name="lokasi" />
              </div>

              <div class="form-group">
                <label for="">Tempat Pemindahan</label>
                <input type="text" class="form-control" name="tempat_pemindahan"/>
              </div>

              <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan"/>
              </div>

              <div class="form-group">
                <label for="">Keluarga</label>
                <input type="number" class="form-control" name="keluarga" min="0" max="99999"/>
              </div>

              <div class="form-group">
                <label for="">Lelaki Dewasa</label>
                <input type="number" id="num1" class="input form-control" name="lelaki"  min="0" max="99999"/>
              </div>

              <div class="form-group">
                <label for="">Wanita</label>
                <input type="number" id="num2" class="input form-control" name="wanita"  min="0" max="99999"/>
              </div>

              <div class="form-group">
                <label for="">Kanak Kanak Lelaki</label>
                <input type="number" id="num3" class="input form-control" name="kanak_lelaki"  min="0" max="99999"/>
              </div>

              <div class="form-group">
                <label for="">Kanak Kanak Perempuan</label>
                <input type="number"  id="num4" class="input form-control" name="kanak_perempuan"  min="0" max="99999"/>
              </div>

              <div class="form-group">
                
                <input type="text" id="tot" class="form-control" name="total" readonly hidden/>
              </div>

              <div class="form-group">
                
                <input type="text" class="form-control" name="pengesahan" value="Pending" readonly hidden/>
              </div>

             
              <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>

            </div>
          </form>

          <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                            <th scope="col">Kemaskini</th>
                            <th scope="col">Tarikh</th>
                            <th scope="col">Jajahan</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Tempat Pemindahan </th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Kemas oleh</th>
                            <th scope="col">kemakini pada</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($menyelamats as $menyelamat)
                          <tr>
                              <td><a href="/menyelamat/{{$menyelamat->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
                              <td>{{$menyelamat->tarikh}}</td>
                              <td>{{$menyelamat->jajahan}}</td>
                              <td>{{$menyelamat->lokasi}}</td>
                              <td>{{$menyelamat->tempat_pemindahan}}</td> 
                              <td>{{$menyelamat->total}}</td>
                              <td>{{$menyelamat->name}}</td>
                              <td>{{$menyelamat->updated_at}}</td>

                              
                        @endforeach
                          </tr>

                        </tbody>
                      </table>
        </div>
      </div>
    </div>
</div>

<script>
 $(".input").on('input',function(){

var x = document.getElementById('num1').value;
x = parseInt(x);

var y = document.getElementById('num2').value;
y = parseInt(y);

var z = document.getElementById('num3').value;
z = parseInt(z);

var a = document.getElementById('num4').value;
a = parseInt(a);

 if(Number.isNaN(x))

 x=0;

 else if(Number.isNaN(y))

 y=0;

 else if(Number.isNaN(z))

z=0;

else if(Number.isNaN(a))

a=0;

document.getElementById('tot').value= x + y + z + a;

});</script>


@endsection