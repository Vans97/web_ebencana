@extends('layouts.super')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:white; height:350px">
          <div class="card-header" style="background-color:#c11a1a">
            <h3 class="card-title" style="color:white">Urus Kampung</h3>
          </div>

          <form role="form" method="POST" action="{{action('KampungController@store')}}">
            {{csrf_field()}}
            
            <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>

            <tr>
            <td width="100px">Kod Jajahan<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"><select id="kjajahan" name="kjajahan" class="kjajahan form-control @error('kjajahan') is-invalid @enderror" onchange="bindKod()" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($kjajahan as $jajahan)
                        <option value="{{ $jajahan->kod }}">{{ $jajahan->nama }}</option>
                         @endforeach
              </select></td>
            </tr>

            <tr>
            <td width="100px">Kod Daerah<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"><select id="kdaerah" name="kdaerah" class="kdaerah form-control @error('kdaerah') is-invalid @enderror" onchange="bindKod2()" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
              </select></td>
            </tr>

            <tr>
            <td>Kod Kampung<font color="red">*</font></td>
            <td>:</td>
            <td>
            <input type="text" style="width:1cm" name="fkod" readonly/>
            <input type="text" style="width:1cm" name="mkod" readonly/>
            <input type="text" style="width:auto" name="lkod"/>
            </td>
            </tr>

            <tr>
            <td>Nama Kampung<font color="red">*</font></td>
            <td>:</td>
            <td><input type="text" class="form-control" name="nama"/></td>
            </tr>

            </tbody>
            </table>
            </div>

           <br>
           <center> <input type="submit" name="submit" class="btn btn-small" style="background-color:white; border:1px solid #555555"  value="Tambah"/>
           <input type="reset" name="reset" class="btn btn-small" style="background-color:#c11a1a; color:white; border:1px solid black" value="Batal"/></center>

          </form>

        </div>

        <div class="card" style="background-color:white">
        <table class="table table-bordered">
              <thead  style="background-color:#c11a1a; color:white">
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
                      <td><a href="/kampung/{{$kampung->lkod}}/edit" class= "btn btn-small" style="background-color:#c11a1a"><i class="fa fa-edit" style="color:white"></i></a></td>
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