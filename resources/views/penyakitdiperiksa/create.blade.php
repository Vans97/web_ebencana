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
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('PenyakitDiperiksaController@store')}}">
            {{csrf_field()}}
            <div class="card-body">


              <div class="form-group">
                <label for="">Tarikh Lapor</label>
                <input type="datetime-local" class="form-control" name="tarikh_lapor" />
              </div>

          
              <div class="form-group"> 
              <label for="jajahan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="penyakit_jajahan" name="penyakit_jajahan" class="penyakit_jajahan form-control @error('penyakit_jajahan') is-invalid @enderror" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($penyakit_jajahan as $jajahan)
                        <option value="{{ $jajahan->kod }}">{{ $jajahan->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group"> 
              <label for="daerah" class="col-md-0 col-form-label text-md-right">{{ __('Daerah') }}</label>
              <select id="penyakit_daerah" name="penyakit_daerah" class="penyakit_daerah form-control @error('penyakit_daerah') is-invalid @enderror" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
              </select>
              </div>
              
              <div class="form-group"> 
              <label for="pemindahan" class="col-md-0 col-form-label text-md-right">{{ __('Pusat Pemindahan') }}</label>
              <select id="penyakit_pemindahan" name="penyakit_pemindahan" class="penyakit_pemindahan form-control @error('penyakit_pemindahan') is-invalid @enderror" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
              </select>
              </div>

              <div class="form-group">
                <label for="">Bilangan Penyakit Berjangkit</label>
                <input type="number" class="form-control" name="bil_penyakit_berjangkit" min="0" max="99999"/>
              </div>

              <div class="form-group">
                <label for="">Bilangan Penyakit Tidak Berjangkit</label>
                <input type="number" class="form-control" name="bil_penyakit_tidak_berjangkit" min="0" max="99999"/>
              </div>

              <div class="form-group">
                <label for="">Bilangan Kecederaan</label>
                <input type="number" class="form-control" name="bil_kecederaan" min="0" max="99999"/>
              </div>

              <div class="form-group">
                <label for="">Bilangan Kematian</label>
                <input type="number" class="form-control" name="bil_kematian" min="0" max="99999"/>
              </div>

              <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan"/>
              </div>

                                 
              <input type="submit" name="submit" class="btn btn-primary" value="Tambah"/>

            </div>
          </form>

          <a href="/penyakitdiperiksa/show" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a>

        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('change','.penyakit_jajahan',function(){
            
            
            var jajahan_kod=$(this).val();
            
            var div=$(this).parent();
            var op=" ";

            $.ajax({
				type:'get',
				url:"{!!URL::to('finddaerahpenyakit')!!}",
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

          
         $('.penyakit_daerah').html(op);
				},
				error:function(){

				}
			});
    });


        $(document).on('change','.penyakit_daerah',function () {
			var lkod=$(this).val();

			var a=$(this).parent();
			console.log(lkod);
			var op=" ";
			$.ajax({
				type:'get',
				url:"{!!URL::to('findnamepenyakit')!!}",
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

         $('.penyakit_pemindahan').html(op);


				},
				error:function(){

				}
			});
		});
  });
</script>
@endsection