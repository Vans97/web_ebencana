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
            <h3 class="card-title">Kemasukan Penyakit Diperiksa</h3>
          </div>

          <form role="form" method="POST" action="{{action('PeralatanPBSMController@store')}}">
            {{csrf_field()}}
            <div class="card-body">


              <div class="form-group">
                <label for="">Tarikh Lapor</label>
                <input type="datetime-local" class="form-control" name="tarikh_lapor" />
              </div>

          
              <div class="form-group"> 
              <label for="jajahan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="peralatan_jajahan" name="peralatan_jajahan" class="peralatan_jajahan form-control @error('peralatan_jajahan') is-invalid @enderror" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($peralatan_jajahan as $jajahan)
                        <option value="{{ $jajahan->kod }}">{{ $jajahan->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group"> 
              <label for="daerah" class="col-md-0 col-form-label text-md-right">{{ __('Daerah') }}</label>
              <select id="peralatan_daerah" name="peralatan_daerah" class="peralatan_daerah form-control @error('peralatan_daerah') is-invalid @enderror" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
              </select>
              </div>
              
              <div class="form-group"> 
              <label for="pemindahan" class="col-md-0 col-form-label text-md-right">{{ __('Pusat Pemindahan') }}</label>
              <select id="peralatan_pemindahan" name="peralatan_pemindahan" class="peralatan_pemindahan form-control @error('peralatan_pemindahan') is-invalid @enderror" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
              </select>
              </div>

              <div class="form-group">
                <label for="">Jenis Peralatan</label>
                <input type="text" class="form-control" name="peralatan"/>
              </div>

              <div class="form-group">
                <label for="">Kuantiti</label>
                <input type="number" class="form-control" name="kuantiti" min="0" max="99999"/>
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
                            <th scope="col">Tarikh Lapor</th>
                            <th scope="col">Jenis Peralatan</th>
                            <th scope="col">Kuantiti</th>
                            <th scope="col">Kemaskini oleh</th>
                            <th scope="col">Kemaskini pada</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($peralatans as $peralatan)
                          <tr>
                              <td><a href="/peralatanpbsm/{{$peralatan->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
                              <td>{{$peralatan->peralatan_jajahan}}-{{$peralatan->peralatan_daerah}}-{{$peralatan->peralatan_pemindahan}}</td>
                              <td>{{$peralatan->tarikh_lapor}}</td>
                              <td>{{$peralatan->peralatan}}</td>
                              <td>{{$peralatan->kuantiti}}</td>
                              <td>{{$peralatan->name}}</td>
                              <td>{{$peralatan->updated_at}}</td>
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

		$(document).on('change','.peralatan_jajahan',function(){
            
            
            var jajahan_kod=$(this).val();
            
            var div=$(this).parent();
            var op=" ";

            $.ajax({
				type:'get',
				url:"{!!URL::to('finddaerahperalatan')!!}",
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

          
         $('.peralatan_daerah').html(op);
				},
				error:function(){

				}
			});
    });


        $(document).on('change','.peralatan_daerah',function () {
			var lkod=$(this).val();

			var a=$(this).parent();
			console.log(lkod);
			var op=" ";
			$.ajax({
				type:'get',
				url:"{!!URL::to('findnameperalatan')!!}",
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

         $('.peralatan_pemindahan').html(op);


				},
				error:function(){

				}
			});
		});
  });
</script>
@endsection