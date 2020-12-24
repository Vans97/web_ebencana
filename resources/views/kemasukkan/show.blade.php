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
            <h3 class="card-title">Kemasukkan Stok</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('KemasukkanController@store')}}">
            {{csrf_field()}}
            <div class="card-body">


            <div class="form-group">
                  
                <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('Fasa') }}</label>
                <select id="fasa" name="fasa" class="form-control @error('fasa') is-invalid @enderror" required>
                   
                         <option value="Fasa I">Fasa I</option>
                         <option value="Fasa II">Fasa II</option>
                         <option value="Fasa III">Fasa III</option>
                         <option value="{Fasa Tambahan">Fasa Tambahan</option>
                 </select>
    
                </div>

                <div class="form-group">
                <label for="">Nota</label>
                <input type="text" class="form-control" name="nota" />
                </div>

                <div class="form-group">
                <label for="">Tarikh Mohon</label>
                <input type="date" class="form-control" name="t_mohon" />
                </div>

                <div class="form-group">
                <label for="">Tarikh Sampai</label>
                <input type="date" class="form-control" name="t_sampai" />
                </div>

              <div class="form-group">
                  
              <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('Barang') }}</label>
              <select id="barang" name="barang" class="form-control @error('barang') is-invalid @enderror" required>
                         @foreach($kemasukkanj as $kemasukkan)
                        <option value="{{ $kemasukkan->nama }}">{{ $kemasukkan->nama }}</option>
                         @endforeach
              </select>

              </div>

              <div class="form-group">
                <label for="">Unit Ukuran</label>
                <input type="text" class="form-control" name="uom" />
              </div>

              <div class="form-group">
                <label for="">Kuantiti</label>
                <input type="text" id="num1" class="input form-control " name="kuantiti"/>
              </div>

              <div class="form-group">
                <label for="">Harga Unit</label>
                <input type="text" id="num2" class="input form-control " name="harga"/>
              </div>

              <div class="form-group">
                <label for="">Harga Keseluruhan</label>
                <input type="text" id="tot" class="form-control " name="total"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>

            </div>
          </form>

          <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                            <th scope="col">Kemaskini</th>
                            <th scope="col">Fasa</th>
                            <th scope="col">Nota</th>
                            <th scope="col">Tarikh Mohon</th>
                            <th scope="col">Tarikh Sampai </th>
                            <th scope="col">Barang</th>
                            <th scope="col">Unit Ukuran</th>
                            <th scope="col">Kuantiti</th>
                            <th scope="col">Harga Unit</th>
                            <th scope="col">Harga Keseluruhan</th>
                            <th scope="col">Kemas oleh</th>
                            <th scope="col">kemakini pada</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($kemasukkans as $kemasukkan)
                          <tr>
                              <td><a href="/kemasukkan/{{$kemasukkan->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
                              <td>{{$kemasukkan->fasa}}</td>
                              <td>{{$kemasukkan->nota}}</td>
                              <td>{{$kemasukkan->t_mohon}}</td>
                              <td>{{$kemasukkan->t_sampai}}</td>
                              <td>{{$kemasukkan->barang}}</td>
                              <td>{{$kemasukkan->uom}}</td>
                              <td>{{$kemasukkan->kuantiti}}</td>
                              <td>{{$kemasukkan->harga}}</td>
                              <td>{{$kemasukkan->total}}</td>
                              <td>{{$kemasukkan->name}}</td>
                              <td>{{$kemasukkan->updated_at}}</td>

                              
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
x = parseFloat(x);

var y = document.getElementById('num2').value;
y = parseFloat(y);

 if(Number.isNaN(x))

 x=0;

 else if(Number.isNaN(y))

 y=0;

document.getElementById('tot').value= x * y;

});</script>


@endsection