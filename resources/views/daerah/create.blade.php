@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:#F1F3F9">
        
          <div class="card-header">
            <h3 class="card-title">Urus Daerah</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('DaerahController@store')}}">
            {{csrf_field()}}
            <!-- <div class="card-body">

          
              <div class="form-group">
                  
              <label for="kumpulan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="djajahan" name="djajahan" class="form-control @error('djajahan') is-invalid @enderror" onchange="bindKod()" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($daerah as $daerahs)
                        <option value="{{ $daerahs->kod }}">{{ $daerahs->nama }}</option>
                         @endforeach
              </select>

              </div>

              <div class="form-group">
                <label for="">Kod Daerah</label>
                <input type="text" class="form-control" name="fkod"/>
                <input type="text" class="form-control" name="kod" />
              </div>

              <div class="form-group">
                <label for="">Nama Daerah</label>
                <input type="text" class="form-control" name="nama"/>
              </div>

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Hantar"/>

            </div> -->

            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>
            <tr>
            <td width="106">Jajahan</td>
            <td width="8">:</td>
            <td> 
            <select id="djajahan" name="djajahan" class="form-control @error('djajahan') is-invalid @enderror" onchange="bindKod()" required>
                    <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($daerah as $daerahs)
                        <option value="{{ $daerahs->kod }}">{{ $daerahs->nama }}</option>
                         @endforeach
            </select>
            </td>
            </tr>

            <tr>
            <td>Kod Daerah</td>
            <td>:</td>
            <td>
            <input type="text"  style="width:1cm" name="fkod"/>
            <input type="text"  name="kod" />
            </td>
            </tr>

            <tr>
            <td>Nama Daerah</td>
            <td>:</td>
            <td>
            <input type="text" class="form-control" name="nama"/>
            </td>
            </tr>

            <tr>
            <td></td>
            <td></td>
            <td></td>
            </tr>

            <tr>
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="submit" class="btn btn-small" style="background-color:white; border:1px solid #555555"  value="Tambah"/>
            <input type="reset" name="reset" class="btn btn-small btn-outline-red" style="background-color:#FF0000; color:white" value="Batal"/></td>
            </tr>

            </tbody>
            </table>
          </form>

         

        </div>
        <center><button><a href="/daerah/show" class= "btn btn-small"  style="color:black">Lihat Semua</a></button></center>
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