@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:white; height:280px">
          <div class="card-header" style="background-color:#c11a1a">
            <h3 class="card-title" style="color:white">Urus Daerah</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('DaerahController@store')}}">
            {{csrf_field()}}

            <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>


            <tr>
            <td width="100px">Jajahan<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="650px"> 
            <select id="djajahan" name="djajahan" class="form-control @error('djajahan') is-invalid @enderror" onchange="bindKod()" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($daerah as $daerahs)
                        <option value="{{ $daerahs->kod }}">{{ $daerahs->nama }}</option>
                         @endforeach
            </select>
            </td>
            </tr>

            <tr>
            <td>Kod Daerah<font color="red">*</font></td>
            <td>:</td>
            <td>
            <input type="text"  style="width:1cm" name="fkod"/>
            <input type="text"  name="kod" style="width:auto"/>
            </td>
            </tr>

            <tr>
            <td>Nama Daerah<font color="red">*</font></td>
            <td>:</td>
            <td>
            <input type="text" class="form-control" name="nama"/>
            </td>
            </tr>

            </tbody>
            </table>
            </div>
</br>
            <center> <input type="submit" name="submit" class="btn btn-small" style="background-color:white; border:1px solid #555555"  value="Tambah"/>
            <input type="reset" name="reset" class="btn btn-small" style="background-color:#c11a1a; color:white; border:1px solid black" value="Batal"/></center>
          </form>
        </div>
        <center><button style="border:1px solid black"><a href="/daerah/show" class= "btn btn-small">Lihat Semua</a></button></center>
        </div>
    </div>
</div>



<script>
  function bindKod(){
    var x = document.getElementById("djajahan").value;
    document.querySelector("input[name='fkod']").value = x;
  }
</script>
@endsection