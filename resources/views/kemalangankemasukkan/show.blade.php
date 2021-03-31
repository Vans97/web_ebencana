@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card" style="background-color:white; height:490px; width:960px">
          <div class="card-header" style="background-color:#c11a1a">
            <h3 class="card-title" style="color:white">Urus Kemasukkan Kes Kemalangan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{action('KemalanganKemasukkanController@store')}}">
            {{csrf_field()}}
            

            <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>

            <tr>
            <td>Tarikh Lapor<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="auto"><input type="datetime-local" class="form-control" name="t_lapor"/></td>
            <td>No Laporan Polis<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="auto"><input type="text" class="form-control" name="no_laporan"/></td>
            </tr>

            <tr>
            <td>Nama Balai<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="auto"><input type="text" class="form-control" name="nama_balai"/></td>
            <td>Kemalangan<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="auto"><select id="kemalangan" name="kemalangan" class="form-control @error('kemalangan') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                         @foreach($kemalangans as $kemalangan)
                        <option value="{{ $kemalangan->nama }}">{{ $kemalangan->nama }}</option>
                         @endforeach
              </select></td>
            </tr>

            <tr>
            <td>Status<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="auto"><input type="text" class="form-control" name="status"/></td>
            <td>Tarikh Dijumpai<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="auto"><input type="datetime-local" class="form-control" name="t_dijumpai"/></td>
            </tr>

            <tr>
            <td>Lokasi<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="auto"><input type="text" class="form-control" name="lokasi"/></td>
            <td>Jajahan<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="auto"><select id="jajahan" name="jajahan" class="form-control @error('jajahan') is-invalid @enderror" required>
                        <option value="0" disabled="true" selected="true">-Pilih-</option>
                        @foreach($jajahans as $jajahan)
                        <option value="{{ $jajahan->nama }}">{{ $jajahan->nama }}</option>
                         @endforeach
              </select></td>
            </tr>

            </tbody>
            </table>
            </div>


            <div class="card-body">
            <table cellpadding="0" cellspacing="0" class="form_theme">
            <tbody>

            <tr>
            <td width="85px">Nama Mangsa<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="254px"><input type="text" class="form-control" name="nama_mangsa"/></td>
            <td width="120px">Bangsa<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="230px"><select id="bangsa" name="bangsa" class="form-control @error('bangsa') is-invalid @enderror" required>
                         <option value="0" disabled="true" selected="true">-Pilih-</option>
                         <option value="Melayu">Melayu</option>
                         <option value="Cina">Cina</option>
                         <option value="India">India</option>
                         <option value="Lain-lain">Lain-lain</option>
                 </select></td>
            </tr>

            <tr>
            <td>Kad Pengenalan<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="auto"><input type="number" class="form-control" name="ic" pattern="[0-9]{12}" title="Sila isi tanpa ' - ' "/></td>
                 <td>Jantina<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="auto"><select id="jantina" name="jantina" class="form-control @error('jantina') is-invalid @enderror" required>
                         <option value="0" disabled="true" selected="true">-Pilih-</option>
                         <option value="Lelaki">Lelaki</option>
                         <option value="Perempuan">Perempuan</option>
                 </select></td>
            </tr>

            <tr>
            <td>Alamat<font color="red">*</font></td>
            <td width="10px">:</td>
            <td width="auto"><input type="text" class="form-control" name="alamat"/></td>
            </tr>

            <tr>
            
            <td width="auto"><input type="text" class="form-control" name="pengesahan" value="Diproses" hidden/></td>
            </tr>

            </tbody>
            </table>
            </div>

            <br>
           <center> <input type="submit" name="submit" class="btn btn-small" style="background-color:white; border:1px solid #555555"  value="Tambah"/>
           <input type="reset" name="reset" class="btn btn-small" style="background-color:#c11a1a; color:white; border:1px solid black" value="Batal"/></center>
          </form><br>
      
        </div>
        <div class="card" style="background-color:white; width:fit-content">
        <table class="table table-bordered">
              <thead  style="background-color:#c11a1a; color:white">
              <tr>
                            
                            <th scope="col">Kemaskini</th>
                            <th scope="col">Tarikh Lapor</th>
                            <th scope="col">Jajahan</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Kemalangan</th>
                            <th scope="col">Nama Mangsa</th>
                            <th scope="col">Kad Pengenalan</th>
                            <th scope="col">kemas oleh</th>
                            <th scope="col">kemakini pada</th>
                            <th scope="col">Pengesahan</th>
                            
                          </tr>
                        </thead>
                      
                        <tbody>
                          @foreach($kemalangank as $kemalangan)
                          <tr>
                              <td><a href="/kemalangankemasukkan/{{$kemalangan->id}}/edit" class= "btn btn-small" style="background-color:#c11a1a"><i class="fa fa-edit" style="color:white"></i></a></td>
                              <td>{{$kemalangan->t_lapor}}</td>
                              <td>{{$kemalangan->jajahan}}</td>
                              <td>{{$kemalangan->lokasi}}</td>
                              <td>{{$kemalangan->kemalangan}}</td>
                              <td>{{$kemalangan->nama_mangsa}}</td>
                              <td>{{$kemalangan->ic}}</td>
                              <td>{{$kemalangan->name}}</td>
                              <td>{{$kemalangan->updated_at}}</td>
                              <td>{{$kemalangan->pengesahan}}</td>
                        @endforeach
                              
                          </tr>
                
              </tbody>
            </table>
        </div>
      </div>
    </div>
</div>

@endsection