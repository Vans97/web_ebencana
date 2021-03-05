@extends('layouts.super')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Urus Pusat Pemindahan</h3>
          </div>

          <form role="form" method="POST" action="{{action('PusatPemindahanController@store')}}">
            {{csrf_field()}}
            <div class="card-body">

          
            <div class="form-group"> 
              <label for="jajahan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="pjajahan" name="pjajahan" class="pjajahan form-control @error('pjajahan') is-invalid @enderror" onchange="bindKod()" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($pjajahan as $jajahan)
                        <option value="{{ $jajahan->kod }}">{{ $jajahan->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group"> 
              <label for="jajahan" class="col-md-0 col-form-label text-md-right">{{ __('Daerah') }}</label>
              <select id="pdaerah" name="pdaerah" class="pdaerah form-control @error('pdaerah') is-invalid @enderror" onchange="bindKod2()" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
              </select>
              </div>

              <div class="form-group">
                <label for="">Kod Pusat</label>
                <input type="text" class="form-control" name="fkod" readonly/>
                <input type="text" class="form-control" name="mkod" readonly/>
                <input type="text" class="form-control" name="lkod" value="P"/>
              </div>

              <div class="form-group">
                <label for="">Nama Pusat</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

              <div class="form-group">
                <label for="">Had Muatan</label>
                <input type="number" class="form-control" name="had"/>
              </div>

              <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Tambah"/>

            </div>
          </form>

          <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                            <th scope="col">Kemaskini</th>
                            <th scope="col">Kod Pusat</th>
                            <th scope="col">Jajahan</th>
                            <th scope="col">Daerah</th>
                            <th scope="col">Nama Pusat</th>
                            <th scope="col">Had Muatan</th>
                            <th scope="col">Kemaskini oleh</th>
                            <th scope="col">Kemaskini pada</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($pusats as $pusat)
                          <tr>
                              <td><a href="/pusatpemindahan/{{$pusat->lkod}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
                              <td>{{$pusat->pjajahan}}-{{$pusat->pdaerah}}-{{$pusat->lkod}}</td>
                              <td>{{$pusat->jah}}</td>
                              <td>{{$pusat->dah}}</td>
                              <td>{{$pusat->pp}}</td>
                              <td>{{$pusat->had}}</td>
                              <td>{{$pusat->name}}</td>
                              <td>{{$pusat->updated_at}}</td>
                        @endforeach
                             
                          </tr>
                          
                        </tbody>
            </table>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('change','.pjajahan',function(){
            
            
            var jajahan_kod=$(this).val();
            
            var div=$(this).parent();
            var op=" ";

            $.ajax({
				type:'get',
				url:"{!!URL::to('create')!!}",
				data:{'id':jajahan_kod},
				success:function(data){
					console.log('success');

					console.log(data);

         

          op+='<option value="0" selected disabled>-Pilih-</option>';
					for(var i=0;i<data.length;i++)
          {
					  op+='<option value="'+data[i].kod+'">'+data[i].nama+'</option>';
          }
          console.log(op);

          // div.find('.kdaerah').html(" ");
         $('.pdaerah').html(op);
				},
				error:function(){

				}
			});


        });
    });
 
</script>

<script>
  function bindKod(){
    var x = document.getElementById("pjajahan").value;
    document.querySelector("input[name='fkod']").value = x;
  }
</script>

<script>
  function bindKod2(){
    var x = document.getElementById("pdaerah").value;
    document.querySelector("input[name='mkod']").value = x;
  }
</script>
@endsection