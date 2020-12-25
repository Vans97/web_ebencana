@extends('layouts.super')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">

            <div class="card-header">{{ __('Akses') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{action('AksesController@store')}}">
                                    @csrf

                            <div class="form-group row">

                            <label for="kumpulan" class="col-md-3 col-form-label text-md-right">{{ __('Kumpulan Pengguna') }}</label>

                            <div class="col-md-6">
                                <select id="kumpulan" name="kumpulan" class="form-control @error('kumpulan') is-invalid @enderror" required>
                                    @foreach($roles as $role)
                                    <option value="{{ $role->kod }}">{{ $role->nama }}</option>
                                    @endforeach
                                </select>
                                @error('kumpulan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row mb-0">
                             <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cari') }}
                                </button>
                            </div>

                            </div>
                            <br><br><br>

                            <table class="table table-bordered" style="width: 70%; margin-left: 11%">
                            <thead class="thead-light">
                                <tr>
                                <th colspan="3" style ="text-align: center">Form</th>
                                <th colspan="5" style ="text-align: center">Rekod</th>
                                </tr>

                                <tr>
                                <th scope="col">Bahagian</th>
                                <th scope="col">Kod</th>
                                <th scope="col">Nama</th>

                                <th scope="col">Buka</th>
                                <th scope="col">Cari</th>
                                <th scope="col">Baru</th>
                                <th scope="col">Kemas</th>
                                <th scope="col">Padam</th>
                                </tr>

                                <tr>
                                    <td text-align="left">Keselamatan</td>
                                    <td text-align="left">a_magroup</td>
                                    <td text-align="left">Group Pengguna</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_magroup" name="chkopen_a_magroup"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_magroup" name="chkread_a_magroup"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_magroup" name="chknew_a_magroup"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_magroup" name="chkold_a_magroup"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_magroup" name="chkdel_a_magroup"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Keselamatan</td>
                                    <td text-align="left">a_mauser</td>
                                    <td text-align="left">Akaun Pengguna</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_mauser" name="chkopen_a_mauser"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_mauser" name="chkread_a_mauser"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_mauser" name="chknew_a_mauser"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_mauser" name="chkold_a_mauser"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_mauser" name="chkdel_a_mauser"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Keselamatan</td>
                                    <td text-align="left">a_maaccess</td>
                                    <td text-align="left">Akses Pengguna</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_maaccess" name="chkopen_a_maaccess"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_maaccess" name="chkread_a_maaccess"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_maaccess" name="chknew_a_maaccess"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_maaccess" name="chkold_a_maaccess"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_maaccess" name="chkdel_a_maaccess"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">General</td>
                                    <td text-align="left">a_daerah</td>
                                    <td text-align="left">Definasi Daerah</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_daerah" name="chkopen_a_daerah"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_daerah" name="chkread_a_daerah"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_daerah" name="chknew_a_daerah"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_daerah" name="chkold_a_daerah"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_daerah" name="chkdel_a_daerah"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">General</td>
                                    <td text-align="left">a_majabatan</td>
                                    <td text-align="left">Definasi Agensi/Jabatan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_majabatan" name="chkopen_a_majabatan"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_majabatan" name="chkread_a_majabatan"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_majabatan" name="chknew_a_majabatan"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_majabatan" name="chkold_a_majabatan"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_majabatan" name="chkdel_a_majabatan"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">General</td>
                                    <td text-align="left">a_geagent</td>
                                    <td text-align="left">Definasi PKOB</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_geagent" name="chkopen_a_geagent"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_geagent" name="chkread_a_geagent"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_geagent" name="chknew_a_geagent"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_geagent" name="chkold_a_geagent"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_geagent" name="chkdel_a_geagent"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">General</td>
                                    <td text-align="left">a_geasset</td>
                                    <td text-align="left">Definasi Asset & Kelengkapan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_geasset" name="chkopen_a_geasset"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_geasset" name="chkread_a_geasset"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_geasset" name="chknew_a_geasset"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_geasset" name="chkold_a_geasset"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_geasset" name="chkdel_a_geasset"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">General</td>
                                    <td text-align="left">a_geasset</td>
                                    <td text-align="left">Definasi Asset & Kelengkapan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_geasset" name="chkopen_a_geasset"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_geasset" name="chkread_a_geasset"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_geasset" name="chknew_a_geasset"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_geasset" name="chkold_a_geasset"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_geasset" name="chkdel_a_geasset"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">General</td>
                                    <td text-align="left">a_gelogis</td>
                                    <td text-align="left">Kelengkapan Agensi</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_gelogis" name="chkopen_a_gelogis"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_gelogis" name="chkread_a_gelogis"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_gelogis" name="chknew_a_gelogis"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_gelogis" name="chkold_a_gelogis"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_gelogis" name="chkdel_a_gelogis"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">General</td>
                                    <td text-align="left">a_gehelicopter</td>
                                    <td text-align="left">Tapak Helikopter</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_gehelicopter" name="chkopen_a_gehelicopter"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_gehelicopter" name="chkread_a_gehelicopter"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_gehelicopter" name="chknew_a_gehelicopter"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_gehelicopter" name="chkold_a_gehelicopter"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_gehelicopter" name="chkdel_a_gehelicopter"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">General</td>
                                    <td text-align="left">a_geworker</td>
                                    <td text-align="left">Tenaga Kerja PKOB</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_geworker" name="chkopen_a_geworker"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_geworker" name="chkread_a_geworker"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_geworker" name="chknew_a_geworker"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_geworker" name="chkold_a_geworker"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_geworker" name="chkdel_a_geworker"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Agihan Barangan</td>
                                    <td text-align="left">a_abitem</td>
                                    <td text-align="left">Definasi Barang</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_abitem" name="chkopen_a_abitem"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_abitem" name="chkread_a_abitem"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_abitem" name="chknew_a_abitem"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_abitem" name="chkold_a_abitem"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_abitem" name="chkdel_a_abitem"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Agihan Barangan</td>
                                    <td text-align="left">a_abtype</td>
                                    <td text-align="left">Definasi Jenis Barang</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_abtype" name="chkopen_a_abtype"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_abtype" name="chkread_a_abtype"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_abtype" name="chknew_a_abtype"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_abtype" name="chkold_a_abtype"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_abtype" name="chkdel_a_abtype"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Agihan Barangan</td>
                                    <td text-align="left">a_abstock</td>
                                    <td text-align="left">Kemasukan Stok Barang</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_abstock" name="chkopen_a_abstock"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_abstock" name="chkread_a_abstock"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_abstock" name="chknew_a_abstock"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_abstock" name="chkold_a_abstock"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_abstock" name="chkdel_a_abstock"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Agihan Barangan</td>
                                    <td text-align="left">a_abapprovalstock</td>
                                    <td text-align="left">Pengesahan Data Stok</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_abapprovalstock" name="chkopen_a_abapprovalstock"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_abapprovalstock" name="chkread_a_abapprovalstock"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_abapprovalstock" name="chknew_a_abapprovalstock"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_abapprovalstock" name="chkold_a_abapprovalstock"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_abapprovalstock" name="chkdel_a_abapprovalstock"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Agihan Barangan</td>
                                    <td text-align="left">a_abapprovalstock</td>
                                    <td text-align="left">Pengesahan Data Stok</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_abapprovalstock" name="chkopen_a_abapprovalstock"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_abapprovalstock" name="chkread_a_abapprovalstock"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_abapprovalstock" name="chknew_a_abapprovalstock"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_abapprovalstock" name="chkold_a_abapprovalstock"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_abapprovalstock" name="chkdel_a_abapprovalstock"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Agihan Barangan</td>
                                    <td text-align="left">a_abissue</td>
                                    <td text-align="left">Agihan Barangan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_abissue" name="chkopen_a_abissue"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_abissue" name="chkread_a_abissue"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_abissue" name="chknew_a_abissue"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_abissue" name="chkold_a_abissue"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_abissue" name="chkdel_a_abissue"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Agihan Barangan</td>
                                    <td text-align="left">a_abapprovalissue</td>
                                    <td text-align="left">Pengesahan Agihan Barangan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_abapprovalissue" name="chkopen_a_abapprovalissue"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_abapprovalissue" name="chkread_a_abapprovalissue"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_abapprovalissue" name="chknew_a_abapprovalissue"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_abapprovalissue" name="chkold_a_abapprovalissue"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_abapprovalissue" name="chkdel_a_abapprovalissue"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Agihan Barangan</td>
                                    <td text-align="left">a_ablist</td>
                                    <td text-align="left">Laporan Agihan Barangan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_ablist" name="chkopen_a_ablist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_ablist" name="chkread_a_ablist"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_ablist" name="chknew_a_ablist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_ablist" name="chkold_a_ablist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_ablist" name="chkdel_a_ablist"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Agihan Barangan</td>
                                    <td text-align="left">a_abview</td>
                                    <td text-align="left">Laporan Teliti Agihan Barangan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_abview" name="chkopen_a_abview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_abview" name="chkread_a_abview"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_abview" name="chknew_a_abview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_abview" name="chkold_a_abview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_abview" name="chkdel_a_abview"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Agihan Barangan</td>
                                    <td text-align="left">a_abview</td>
                                    <td text-align="left">Laporan Teliti Agihan Barangan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_abview" name="chkopen_a_abview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_abview" name="chkread_a_abview"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_abview" name="chknew_a_abview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_abview" name="chkold_a_abview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_abview" name="chkdel_a_abview"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Kemalangan</td>
                                    <td text-align="left">a_kmtype</td>
                                    <td text-align="left">Definasi Jenis Kemalangan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_kmtype" name="chkopen_a_kmtype"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_kmtype" name="chkread_a_kmtype"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_kmtype" name="chknew_a_kmtype"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_kmtype" name="chkold_a_kmtype"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_kmtype" name="chkdel_a_kmtype"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Kemalangan</td>
                                    <td text-align="left">a_kmentry</td>
                                    <td text-align="left">Kemasukan Kes Kemalangan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_kmentry" name="chkopen_a_kmentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_kmentry" name="chkread_a_kmentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_kmentry" name="chknew_a_kmentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_kmentry" name="chkold_a_kmentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_kmentry" name="chkdel_a_kmentry"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Kemalangan</td>
                                    <td text-align="left">a_kmapproval</td>
                                    <td text-align="left">Pengesahan Kes Kemalangan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_kmapproval" name="chkopen_a_kmapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_kmapproval" name="chkread_a_kmapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_kmapproval" name="chknew_a_kmapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_kmapproval" name="chkold_a_kmapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_kmapproval" name="chkdel_a_kmapproval"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Kemalangan</td>
                                    <td text-align="left">a_kmlist</td>
                                    <td text-align="left">Laporan Kemalangan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_kmlist" name="chkopen_a_kmlist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_kmlist" name="chkread_a_kmlist"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_kmlist" name="chknew_a_kmlist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_kmlist" name="chkold_a_kmlist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_kmlist" name="chkdel_a_kmlist"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Kemalangan</td>
                                    <td text-align="left">a_kmview</td>
                                    <td text-align="left">Laporan Teliti Kemalangan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_kmview" name="chkopen_a_kmview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_kmview" name="chkread_a_kmview"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_kmview" name="chknew_a_kmview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_kmview" name="chkold_a_kmview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_kmview" name="chkdel_a_kmview"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Lalu Lintas</td>
                                    <td text-align="left">a_llroad</td>
                                    <td text-align="left">Definasi Jalan Utama</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_llroad" name="chkopen_a_llroad"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_llroad" name="chkread_a_llroad"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_llroad" name="chknew_a_llroad"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_llroad" name="chkold_a_llroad"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_llroad" name="chkdel_a_llroad"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Lalu Lintas</td>
                                    <td text-align="left">a_llentry</td>
                                    <td text-align="left">Kemasukkan Data Jalan Tutup</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_llentry" name="chkopen_a_llentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_llentry" name="chkread_a_llentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_llentry" name="chknew_a_llentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_llentry" name="chkold_a_llentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_llentry" name="chkdel_a_llentry"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Lalu Lintas</td>
                                    <td text-align="left">a_llapproval</td>
                                    <td text-align="left">Pengesahan Data Jalan Tutup</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_llapproval" name="chkopen_a_llapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_llapproval" name="chkread_a_llapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_llapproval" name="chknew_a_llapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_llapproval" name="chkold_a_llapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_llapproval" name="chkdel_a_llapproval"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Lalu Lintas</td>
                                    <td text-align="left">a_lllist</td>
                                    <td text-align="left">Laporan Jalan Tutup</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_lllist" name="chkopen_a_lllist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_lllist" name="chkread_a_lllist"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_lllist" name="chknew_a_lllist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_lllist" name="chkold_a_lllist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_lllist" name="chkdel_a_lllist"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Lalu Lintas</td>
                                    <td text-align="left">a_llview</td>
                                    <td text-align="left">Laporan Teliti Jalan Tutup</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_llview" name="chkopen_a_llview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_llview" name="chkread_a_llview"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_llview" name="chknew_a_llview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_llview" name="chkold_a_llview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_llview" name="chkdel_a_llview"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Lalu Lintas</td>
                                    <td text-align="left">a_lledit</td>
                                    <td text-align="left">Kemaskini Data Jalan Tutup</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_lledit" name="chkopen_a_lledit"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_lledit" name="chkread_a_lledit"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_lledit" name="chknew_a_lledit"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_lledit" name="chkold_a_lledit"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_lledit" name="chkdel_a_lledit"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Lalu Lintas</td>
                                    <td text-align="left">a_lleapproval</td>
                                    <td text-align="left">Pengesahan Kemaskini</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_lleapproval" name="chkopen_a_lleapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_lleapproval" name="chkread_a_lleapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_lleapproval" name="chknew_a_lleapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_lleapproval" name="chkold_a_lleapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_lleapproval" name="chkdel_a_lleapproval"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Lalu Lintas</td>
                                    <td text-align="left">a_llelist</td>
                                    <td text-align="left">Laporan Kemaskini</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_llelist" name="chkopen_a_llelist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_llelist" name="chkread_a_llelist"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_llelist" name="chknew_a_llelist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_llelist" name="chkold_a_llelist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_llelist" name="chkdel_a_llelist"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Aras Air</td>
                                    <td text-align="left">a_pavenue</td>
                                    <td text-align="left">Definasi Stesen Aras Air</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pavenue" name="chkopen_a_pavenue"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pavenue" name="chkread_a_pavenue"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pavenue" name="chknew_a_pavenue"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pavenue" name="chkold_a_pavenue"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pavenue" name="chkdel_a_pavenue"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Aras Air</td>
                                    <td text-align="left">a_pariver</td>
                                    <td text-align="left">Definasi Sungai</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pariver" name="chkopen_a_pariver"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pariver" name="chkread_a_pariver"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pariver" name="chknew_a_pariver"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pariver" name="chkold_a_pariver"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pariver" name="chkdel_a_pariver"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Aras Air</td>
                                    <td text-align="left">a_paentry</td>
                                    <td text-align="left">Kemasukan Data Aras Air</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_paentry" name="chkopen_a_paentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_paentry" name="chkread_a_paentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_paentry" name="chknew_a_paentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_paentry" name="chkold_a_paentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_paentry" name="chkdel_a_paentry"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Aras Air</td>
                                    <td text-align="left">a_paapproval</td>
                                    <td text-align="left">Pengesahan Data Aras Air</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_paapproval" name="chkopen_a_paapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_paapproval" name="chkread_a_paapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_paapproval" name="chknew_a_paapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_paapproval" name="chkold_a_paapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_paapproval" name="chkdel_a_paapproval"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Aras Air</td>
                                    <td text-align="left">a_palist</td>
                                    <td text-align="left">Laporan Aras Air</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_palist" name="chkopen_a_palist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_palist" name="chkread_a_palist"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_palist" name="chknew_a_palist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_palist" name="chkold_a_palist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_palist" name="chkdel_a_palist"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Aras Air</td>
                                    <td text-align="left">a_paview</td>
                                    <td text-align="left">Laporan Teliti Aras Air</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_paview" name="chkopen_a_paview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_paview" name="chkread_a_paview"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_paview" name="chknew_a_paview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_paview" name="chkold_a_paview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_paview" name="chkdel_a_paview"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Pemindahan Mangsa</td>
                                    <td text-align="left">a_pmkampung</td>
                                    <td text-align="left">Definasi Kampung</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pmkampung" name="chkopen_a_pmkampung"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pmkampung" name="chkread_a_pmkampung"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pmkampung" name="chknew_a_pmkampung"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pmkampung" name="chkold_a_pmkampung"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pmkampung" name="chkdel_a_pmkampung"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Pemindahan Mangsa</td>
                                    <td text-align="left">a_pmsuparea</td>
                                    <td text-align="left">Definasi Pusat Pemindahan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pmsuparea" name="chkopen_a_pmsuparea"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pmsuparea" name="chkread_a_pmsuparea"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pmsuparea" name="chknew_a_pmsuparea"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pmsuparea" name="chkold_a_pmsuparea"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pmsuparea" name="chkdel_a_pmsuparea"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Pemindahan Mangsa</td>
                                    <td text-align="left">a_pmbentry</td>
                                    <td text-align="left">Tarikh Buka Pusat Pemindahan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pmbentry" name="chkopen_a_pmbentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pmbentry" name="chkread_a_pmbentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pmbentry" name="chknew_a_pmbentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pmbentry" name="chkold_a_pmbentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pmbentry" name="chkdel_a_pmbentry"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Pemindahan Mangsa</td>
                                    <td text-align="left">a_pmbapproval</td>
                                    <td text-align="left">Pengesahan Tarikh Pusat Dibuka</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pmbapproval" name="chkopen_a_pmbapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pmbapproval" name="chkread_a_pmbapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pmbapproval" name="chknew_a_pmbapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pmbapproval" name="chkold_a_pmbapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pmbapproval" name="chkdel_a_pmbapproval"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Pemindahan Mangsa</td>
                                    <td text-align="left">a_pmentry</td>
                                    <td text-align="left">Kemasukan Data Pemindahan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pmentry" name="chkopen_a_pmentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pmentry" name="chkread_a_pmentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pmentry" name="chknew_a_pmentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pmentry" name="chkold_a_pmentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pmentry" name="chkdel_a_pmentry"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Pemindahan Mangsa</td>
                                    <td text-align="left">a_pmapproval</td>
                                    <td text-align="left">Pengesahan Data Pemindahan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pmapproval" name="chkopen_a_pmapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pmapproval" name="chkread_a_pmapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pmapproval" name="chknew_a_pmapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pmapproval" name="chkold_a_pmapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pmapproval" name="chkdel_a_pmapproval"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Pemindahan Mangsa</td>
                                    <td text-align="left">a_pmtentry</td>
                                    <td text-align="left">Tarikh Tutup Pusat Pemindahan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pmtentry" name="chkopen_a_pmtentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pmtentry" name="chkread_a_pmtentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pmtentry" name="chknew_a_pmtentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pmtentry" name="chkold_a_pmtentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pmtentry" name="chkdel_a_pmtentry"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Pemindahan Mangsa</td>
                                    <td text-align="left">a_pmtapproval</td>
                                    <td text-align="left">Pengesahan Tarikh Pusat Ditutup</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pmtapproval" name="chkopen_a_pmtapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pmtapproval" name="chkread_a_pmtapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pmtapproval" name="chknew_a_pmtapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pmtapproval" name="chkold_a_pmtapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pmtapproval" name="chkdel_a_pmtapproval"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Pemindahan Mangsa</td>
                                    <td text-align="left">a_pmlist</td>
                                    <td text-align="left">Laporan Pemindahan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pmlist" name="chkopen_a_pmlist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pmlist" name="chkread_a_pmlist"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pmlist" name="chknew_a_pmlist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pmlist" name="chkold_a_pmlist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pmlist" name="chkdel_a_pmlist"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Pemindahan Mangsa</td>
                                    <td text-align="left">a_pmview</td>
                                    <td text-align="left">Laporan Teliti Pemindahan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pmview" name="chkopen_a_pmview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pmview" name="chkread_a_pmview"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pmview" name="chknew_a_pmview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pmview" name="chkold_a_pmview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pmview" name="chkdel_a_pmview"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Taburan Hujan</td>
                                    <td text-align="left">a_thvenue</td>
                                    <td text-align="left">Definasi Stesen Sukatan Hujan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_thvenue" name="chkopen_a_thvenue"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_thvenue" name="chkread_a_thvenue"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_thvenue" name="chknew_a_thvenue"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_thvenue" name="chkold_a_thvenue"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_thvenue" name="chkdel_a_thvenue"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Taburan Hujan</td>
                                    <td text-align="left">a_thentry</td>
                                    <td text-align="left">Kemasukan Data Taburan Hujan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_thentry" name="chkopen_a_thentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_thentry" name="chkread_a_thentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_thentry" name="chknew_a_thentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_thentry" name="chkold_a_thentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_thentry" name="chkdel_a_thentry"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Taburan Hujan</td>
                                    <td text-align="left">a_thapproval</td>
                                    <td text-align="left">Pengesahan Data Taburan Hujan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_thapproval" name="chkopen_a_thapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_thapproval" name="chkread_a_thapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_thapproval" name="chknew_a_thapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_thapproval" name="chkold_a_thapproval"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_thapproval" name="chkdel_a_thapproval"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Taburan Hujan</td>
                                    <td text-align="left">a_thlist</td>
                                    <td text-align="left">Laporan Taburan Hujan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_thlist" name="chkopen_a_thlist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_thlist" name="chkread_a_thlist"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_thlist" name="chknew_a_thlist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_thlist" name="chkold_a_thlist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_thlist" name="chkdel_a_thlist"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Taburan Hujan</td>
                                    <td text-align="left">a_thview</td>
                                    <td text-align="left">Laporan Teliti Taburan Hujan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_thview" name="chkopen_a_thview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_thview" name="chkread_a_thview"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_thview" name="chknew_a_thview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_thview" name="chkold_a_thview"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_thview" name="chkdel_a_thview"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Gerakan Menyelamat</td>
                                    <td text-align="left">a_penyelamat</td>
                                    <td text-align="left">Kemasukan Gerakan Menyelamat</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_penyelamat" name="chkopen_a_penyelamat"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_penyelamat" name="chkread_a_penyelamat"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_penyelamat" name="chknew_a_penyelamat"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_penyelamat" name="chkold_a_penyelamat"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_penyelamat" name="chkdel_a_penyelamat"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Gerakan Menyelamat</td>
                                    <td text-align="left">a_penyelamatapv</td>
                                    <td text-align="left">Pengesahan Gerakan Menyelamat</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_penyelamatapv" name="chkopen_a_penyelamatapv"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_penyelamatapv" name="chkread_a_penyelamatapv"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_penyelamatapv" name="chknew_a_penyelamatapv"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_penyelamatapv" name="chkold_a_penyelamatapv"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_penyelamatapv" name="chkdel_a_penyelamatapv"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Gerakan Menyelamat</td>
                                    <td text-align="left">a_pylist</td>
                                    <td text-align="left">Laporan Gerakan Menyelamat</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pylist" name="chkopen_a_pylist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pylist" name="chkread_a_pylist"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pylist" name="chknew_a_pylist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pylist" name="chkold_a_pylist"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pylist" name="chkdel_a_pylist"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Kesihatan</td>
                                    <td text-align="left">a_kfentry</td>
                                    <td text-align="left">Kemasukan Fasiliti Terlibat</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_kfentry" name="chkopen_a_kfentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_kfentry" name="chkread_a_kfentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_kfentry" name="chknew_a_kfentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_kfentry" name="chkold_a_kfentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_kfentry" name="chkdel_a_kfentry"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Kesihatan</td>
                                    <td text-align="left">a_kpaentry</td>
                                    <td text-align="left">Kemasukan Bil. Pasukan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_kpaentry" name="chkopen_a_kpaentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_kpaentry" name="chkread_a_kpaentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_kpaentry" name="chknew_a_kpaentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_kpaentry" name="chkold_a_kpaentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_kpaentry" name="chkdel_a_kpaentry"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">Kesihatan</td>
                                    <td text-align="left">a_kpyentry</td>
                                    <td text-align="left">Kemasukan Bil. Pasukan</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_kpyentry" name="chkopen_a_kpyentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_kpyentry" name="chkread_a_kpyentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_kpyentry" name="chknew_a_kpyentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_kpyentry" name="chkold_a_kpyentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_kpyentry" name="chkdel_a_kpyentry"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">PBSM</td>
                                    <td text-align="left">a_pbsmalatentry</td>
                                    <td text-align="left">Kemasukan Peralatan Dihantar</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pbsmalatentry" name="chkopen_a_pbsmalatentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pbsmalatentry" name="chkread_a_pbsmalatentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pbsmalatentry" name="chknew_a_pbsmalatentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pbsmalatentry" name="chkold_a_pbsmalatentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pbsmalatentry" name="chkdel_a_pbsmalatentry"></td>

                                </tr>

                                <tr>
                                    <td text-align="left">PBSM</td>
                                    <td text-align="left">a_pbsmpaentry</td>
                                    <td text-align="left">Kemasukan Bil. Petugas</td>
                                    <td text-align="center"><input type="checkbox" id="chkopen_a_pbsmpaentry" name="chkopen_a_pbsmpaentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkread_a_pbsmpaentry" name="chkread_a_pbsmpaentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chknew_a_pbsmpaentry" name="chknew_a_pbsmpaentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkold_a_pbsmpaentry" name="chkold_a_pbsmpaentry"></td>
                                    <td text-align="center"><input type="checkbox" id="chkdel_a_pbsmpaentry" name="chkdel_a_pbsmpaentry"></td>

                                </tr>










                            </thead>
                            </table>



                    </form>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>
@endsection
