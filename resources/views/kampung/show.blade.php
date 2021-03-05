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
            <h3 class="card-title">Urus Kampung</h3>
          </div>

          <form role="form" method="POST" action="{{action('KampungController@store')}}">
            {{csrf_field()}}
            <div class="card-body">

          
              <div class="form-group"> 
              <label for="jajahan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="kjajahan" name="kjajahan" class="kjajahan form-control @error('kjajahan') is-invalid @enderror" onchange="bindKod()" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($kjajahan as $jajahan)
                        <option value="{{ $jajahan->kod }}">{{ $jajahan->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group"> 
              <label for="kampungd" class="col-md-0 col-form-label text-md-right">{{ __('Daerah') }}</label>
              <select id="kdaerah" name="kdaerah" class="kdaerah form-control @error('kdaerah') is-invalid @enderror" onchange="bindKod2()" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
              </select>
              </div>

              <div class="form-group">
                <label for="">Kod Kampung</label>
                <input type="text" class="form-control" name="fkod" readonly/>
                <input type="text" class="form-control" name="mkod" readonly/>
                <input type="text" class="form-control" name="lkod"/>
              </div>

              <div class="form-group">
                <label for="">Nama Kampung</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Tambah"/>

            </div>
          </form>

         
        

          <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            
                            <th scope="col">Kemaskini</th>
                            <th scope="col">Kod Kampung</th>
                            <th scope="col">Jajahan</th>
                            <th scope="col">Daerah</th>
                            <th scope="col">Nama Kampung</th>
                            <th scope="col">Kemaskini oleh</th>
                            <th scope="col">Kemaskini pada</th>
                           
                          </tr>
                        </thead>
                      
                        <tbody>
                         @foreach($kampungs as $kampung)
                          <tr>
                              <td><a href="/kampung/{{$kampung->lkod}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
                              <td>{{$kampung->kjajahan}}-{{$kampung->kdaerah}}-{{$kampung->lkod}}</td>
                              <td>{{$kampung->jah}}</td>
                              <td>{{$kampung->dah}}</td>
                              <td>{{$kampung->nama}}</td>
                              <td>{{$kampung->name}}</td>
                              <td>{{$kampung->updated_at}}</td>
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

		$(document).on('change','.kjajahan',function(){
            
            
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
         $('.kdaerah').html(op);
				},
				error:function(){

				}
			});


        });
    });
 
</script>


<script>
  function bindKod(){
    var x = document.getElementById("kjajahan").value;
    document.querySelector("input[name='fkod']").value = x;
  }
</script>

<script>
  function bindKod2(){
    var x = document.getElementById("kdaerah").value;
    document.querySelector("input[name='mkod']").value = x;
  }
</script>
@endsection