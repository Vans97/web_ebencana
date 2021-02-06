@extends('layouts.super')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>


<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Kemaskini</h3>
          </div>

    <form action="{{action('MenyelamatController@update',$menyelamat->id)}}" method="POST">
        {{ csrf_field() }}
        <div class="card-body">
               
                <hr>
                    <input type="hidden" name="_method" value="UPDATE"/>

            <div class="form-group">
                <label for="">Tarikh</label>
                <input type="text" class="form-control" name="tarikh" value="{{$menyelamat->tarikh}}" readonly/>
              </div>

              <div class="form-group">
              <label for="jajahan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <input type="text" class="form-control" name="jajahan" value="{{$menyelamat->jajahan}}" readonly/>
              
              </div>

              <div class="form-group">
                <label for="">Lokasi Berlaku</label>
                <input type="text" class="form-control" name="lokasi"  value="{{$menyelamat->lokasi}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Tempat Pemindahan</label>
                <input type="text" class="form-control" name="tempat_pemindahan"  value="{{$menyelamat->tempat_pemindahan}}" readonly/>
              </div>

              <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan"  value="{{$menyelamat->keterangan}}" />
              </div>

              <div class="form-group">
                <label for="">Keluarga</label>
                <input type="number" class="form-control" name="keluarga" min="0" max="99999"  value="{{$menyelamat->keluarga}}"/>
              </div>

              <div class="form-group">
                <label for="">Lelaki Dewasa</label>
                <input type="number" id="num1" class="input form-control" name="lelaki"  min="0" max="99999"  value="{{$menyelamat->lelaki}}"/>
              </div>

              <div class="form-group">
                <label for="">Wanita</label>
                <input type="number" id="num2" class="input form-control" name="wanita"  min="0" max="99999"  value="{{$menyelamat->wanita}}"/>
              </div>

              <div class="form-group">
                <label for="">Kanak Kanak Lelaki</label>
                <input type="number" id="num3" class="input form-control" name="kanak_lelaki"  min="0" max="99999"  value="{{$menyelamat->kanak_lelaki}}"/>
              </div>

              <div class="form-group">
                <label for="">Kanak Kanak Perempuan</label>
                <input type="number"  id="num4" class="input form-control" name="kanak_perempuan"  min="0" max="99999"  value="{{$menyelamat->kanak_perempuan}}"/>
              </div>

              <div class="form-group">
                
                <input type="text" id="tot" class="form-control" name="total" readonly value="{{$menyelamat->total}}" readonly/>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="pengesahan"  value="{{$menyelamat->pengesahan}}"  hidden readonly/>
              </div>

            

            {{ method_field('PUT')}}
            <button type="submit" name="submit" class="btn btn-success">Tambah</button>

        </div>
    
    </form>
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