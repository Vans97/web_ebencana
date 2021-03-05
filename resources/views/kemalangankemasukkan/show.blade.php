@extends('layouts.super')

@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-11" style="margin-left: 7%; margin-top:2%">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Urus Kemasukkan Kes Kemalangan</h3>
          </div>

          <form role="form" method="POST" action="{{action('KemalanganKemasukkanController@store')}}">
            {{csrf_field()}}
            <div class="card-body">

              <div class="form-group">
                <label for="">Tarikh Lapor</label>
                <input type="datetime-local" class="form-control" name="t_lapor" />
              </div>

              <div class="form-group">
                <label for="">No Laporan Polis</label>
                <input type="text" class="form-control" name="no_laporan" />
              </div>

              <div class="form-group">
                <label for="">Nama Balai</label>
                <input type="text" class="form-control" name="nama_balai" />
              </div>

              <div class="form-group">
              <label for="kemalangan" class="col-md-0 col-form-label text-md-right">{{ __('Kemalangan') }}</label>
              <select id="kemalangan" name="kemalangan" class="form-control @error('kemalangan') is-invalid @enderror" required>
                         @foreach($kemalangans as $kemalangan)
                        <option value="{{ $kemalangan->nama }}">{{ $kemalangan->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group">
                <label for="">Status</label>
                <input type="text" class="form-control" name="status" />
              </div>

              <div class="form-group">
                <label for="">Tarikh Dijumpai</label>
                <input type="datetime-local" class="form-control" name="t_dijumpai"/>
              </div>

              <div class="form-group">
                <label for="">Lokasi</label>
                <input type="text" class="form-control" name="lokasi"/>
              </div>

              <div class="form-group">
              <label for="jajahan" class="col-md-0 col-form-label text-md-right">{{ __('Jajahan') }}</label>
              <select id="jajahan" name="jajahan" class="form-control @error('jajahan') is-invalid @enderror" required>
                         @foreach($jajahans as $jajahan)
                        <option value="{{ $jajahan->nama }}">{{ $jajahan->nama }}</option>
                         @endforeach
              </select>
              </div>

              <div class="form-group">
                <label for="">Nama Mangsa</label>
                <input type="text" class="form-control" name="nama_mangsa"/>
              </div>

              <div class="form-group">
                <label for="">Kad Pengenalan</label>
                <input type="text" class="form-control" name="ic" pattern="[0-9]{12}" title="Sila isi tanpa ' - '" />
              </div>

             

              <div class="form-group">
                <label for="bangsa" class="col-md-0 col-form-label text-md-right">{{ __('Bangsa') }}</label>
                <select id="bangsa" name="bangsa" class="form-control @error('bangsa') is-invalid @enderror" required>
                         <option value="0" disabled="true" selected="true">-Pilih-</option>
                         <option value="Melayu">Melayu</option>
                         <option value="Cina">Cina</option>
                         <option value="India">India</option>
                         <option value="Lain-lain">Lain-lain</option>
                 </select>
                </div>

                <div class="form-group">
                <label for="jantina" class="col-md-0 col-form-label text-md-right">{{ __('Jantina') }}</label>
                <select id="jantina" name="jantina" class="form-control @error('jantina') is-invalid @enderror" required>
                         <option value="0" disabled="true" selected="true">-Pilih-</option>
                         <option value="Lelaki">Lelaki</option>
                         <option value="Perempuan">Perempuan</option>
                 </select>
                </div>

              <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat"/>
              </div>

              <div class="form-group" >
                <input type="text" class="form-control" name="pengesahan" value="Pending" hidden />
              </div>

              

                       
              <input type="submit" name="submit" class="btn btn-primary" value="Tambah"/>

            </div>
          </form>
        

          <table class="table table-bordered">
                        <thead class="thead-dark">
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
                              <td><a href="/kemalangankemasukkan/{{$kemalangan->id}}/edit" class= "btn btn-small bg-gradient-primary"><i class="fa fa-edit"></i></a></td>
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