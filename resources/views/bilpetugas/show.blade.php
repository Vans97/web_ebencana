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
            <h3 class="card-title">Kemasukan Bilangan Petugas</h3>
          </div>

          <form role="form" method="POST" action="{{action('BilPetugasController@store')}}">
            {{csrf_field()}}
            <div class="card-body">


              <div class="form-group">
                <label for="">Tarikh Lapor</label>
                <input type="datetime-local" class="form-control" name="tarikh_lapor" />
              </div>

          
              <div class="form-group"> 
              <label for="jajahan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="bjajahan" name="bjajahan" class="bjajahan form-control @error('bjajahan') is-invalid @enderror" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($bjajahan as $jajahan)
                        <option value="{{ $jajahan->kod }}">{{ $jajahan->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group"> 
              <label for="daerah" class="col-md-0 col-form-label text-md-right">{{ __('Daerah') }}</label>
              <select id="bdaerah" name="bdaerah" class="bdaerah form-control @error('bdaerah') is-invalid @enderror" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
              </select>
              </div>
              
              <div class="form-group"> 
              <label for="pemindahan" class="col-md-0 col-form-label text-md-right">{{ __('Pusat Pemindahan') }}</label>
              <select id="bpemindahan" name="bpemindahan" class="bpemindahan form-control @error('bpemindahan') is-invalid @enderror" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
              </select>
              </div>

              <div class="form-group">
                <label for="">Bilangan Petugas Lelaki</label>
                <input type="number" class="form-control" name="bil_lelaki" min="0" max="99999"/>
              </div>

              <div class="form-group">
                <label for="">Bilangan Petugas Perempuan</label>
                <input type="number" class="form-control" name="bil_perempuan" min="0" max="99999"/>
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
                            <th scope="col">Kod</th>
                            <th scope="col">Bilangan Petugas Lelaki</th>
                            <th scope="col">Bilangan Petugas Perempuan</th>
                            <th scope="col">Kemaskini oleh</th>
                            <th scope="col">Kemaskini pada</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($petugass as $petugas)
                          <tr>
                              <td><a href="/bilpetugas/{{$petugas->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
                              <td>{{$petugas->bjajahan}}-{{$petugas->bdaerah}}-{{$petugas->bpemindahan}}</td>
                              <td>{{$petugas->bil_lelaki}}</td>
                              <td>{{$petugas->bil_perempuan}}</td>
                              <td>{{$petugas->name}}</td>
                              <td>{{$petugas->updated_at}}</td>
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

		$(document).on('change','.bjajahan',function(){
            
            
            var jajahan_kod=$(this).val();
            
            var div=$(this).parent();
            var op=" ";

            $.ajax({
				type:'get',
				url:"{!!URL::to('finddaerahpetugas')!!}",
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

          
         $('.bdaerah').html(op);
				},
				error:function(){

				}
			});
    });


        $(document).on('change','.bdaerah',function () {
			var lkod=$(this).val();

			var a=$(this).parent();
			console.log(lkod);
			var op=" ";
			$.ajax({
				type:'get',
				url:"{!!URL::to('findnamepetugas')!!}",
				data:{'id':lkod},
				dataType:'json',//return data will be json
				success:function(data){
					console.log("success");
					console.log(data);

					
          op+='<option value="0" selected disabled>-Pilih-</option>';
					for(var i=0;i<data.length;i++)
          {
					  op+='<option value="'+data[i].lkod+'">'+data[i].nama+'</option>';
          }
         console.log(op);

         $('.bpemindahan').html(op);


				},
				error:function(){

				}
			});
		});
  });
</script>
@endsection