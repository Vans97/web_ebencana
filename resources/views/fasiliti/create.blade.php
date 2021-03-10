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
            <h3 class="card-title">Kemasukan Fasiliti Terlibat</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('FasilitiController@store')}}">
            {{csrf_field()}}
            <div class="card-body">


              <div class="form-group">
                <label for="">Tarikh Lapor</label>
                <input type="datetime-local" class="form-control" name="tarikh_lapor" />
              </div>

          
              <div class="form-group"> 
              <label for="jajahan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="fjajahan" name="fjajahan" class="fjajahan form-control @error('fjajahan') is-invalid @enderror" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($fjajahan as $jajahan)
                        <option value="{{ $jajahan->kod }}">{{ $jajahan->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group"> 
              <label for="daerah" class="col-md-0 col-form-label text-md-right">{{ __('Daerah') }}</label>
              <select id="fdaerah" name="fdaerah" class="fdaerah form-control @error('fdaerah') is-invalid @enderror" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
              </select>
              </div>
              
              <div class="form-group"> 
              <label for="pemindahan" class="col-md-0 col-form-label text-md-right">{{ __('Pusat Pemindahan') }}</label>
              <select id="fpemindahan" name="fpemindahan" class="fpemindahan form-control @error('fpemindahan') is-invalid @enderror" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
              </select>
              </div>

              <div class="form-group">
                <label for="">Lokasi Banjir</label>
                <input type="text" class="form-control" name="lokasi"/>
              </div>

              <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan"/>
              </div>

              <div class="form-group">
                <label for="">Fasiliti Terlibat</label>
                <input type="text" class="form-control" name="fasiliti_terlibat"/>
              </div>

              <div class="form-group">
                <label for="">Jenis Kerosakan</label><br>
                <input type="radio" id="tenggelam" name="jenis_kerosakan" value="Tenggelam"/>
                <label for="tenggelam">Tenggelam</label><br>

                <input type="radio" id="operasi" name="jenis_kerosakan" value="Terputus Hubungan & Masih Beroperasi"/>
                <label for="operasi">Terputus Hubungan & Masih Beroperasi</label><br>

                <input type="radio" id="takoperasi" name="jenis_kerosakan" value="Terputus Hubungan & Tidak Beroperasi"/>
                <label for="takoperasi">Terputus Hubungan & Tidak Beroperasi</label><br>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Tambah"/>

            </div>
          </form>

          <a href="/fasiliti/show" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a>

        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('change','.fjajahan',function(){
            
            
            var jajahan_kod=$(this).val();
            
            var div=$(this).parent();
            var op=" ";

            $.ajax({
				type:'get',
				url:"{!!URL::to('finddaerah')!!}",
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

          
         $('.fdaerah').html(op);
				},
				error:function(){

				}
			});
    });


        $(document).on('change','.fdaerah',function () {
			var lkod=$(this).val();

			var a=$(this).parent();
			console.log(lkod);
			var op=" ";
			$.ajax({
				type:'get',
				url:"{!!URL::to('findname')!!}",
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

         $('.fpemindahan').html(op);


				},
				error:function(){

				}
			});
		});
  });
</script>
@endsection