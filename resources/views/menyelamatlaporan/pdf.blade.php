<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
        /* table, th, td, tr
        {
            border: 1px solid black;
        } */

        /* table.center
        {
            margin-left: auto;
            margin-right: auto;
        } */
    </style>
  </head>
  <body>
   
    <center><b>Laporan Gerakan Menyelamat</b></center>

    <table class="center table-bordered" style="padding-top: 100px">
        <thead class="thead-dark">

            <tr>
                <th width="130px" style="text-align: left;">Jajahan</th>
                <th width="10px">:</th>
                <td width="400px">{{$menyelamat->jajahan}}</td>
                <th style="text-align: left;">Rekod</th>
                <th>:</th>
                <td>{{$menyelamat->pengesahan}}</td>
            </tr>
            <tr>
                <th width="100px" style="text-align: left;">Lokasi Berlaku</th>
                <th width="10px">:</th>
                <td>{{$menyelamat->lokasi}}</td>
            </tr>
            <tr>
                <th width="150px" style="text-align: left;">Tempat Pemindahan</th>
                <th width="10px">:</th>
                <td>{{$menyelamat->tempat_pemindahan}}</td>
            </tr>
        </thead>
    </table>

    <hr style="width:60%;text-align:left;margin-left:50px">

<p><b>Bilangan Mangsa</b></p>
    <table class="table table-bordered">
        <thead class="thead-dark">

            <tr>
                <th width="170px" style="text-align: left;">Jumlah Keluarga</th>
                <th width="10px">:</th>
                <td width="200px">{{$menyelamat->keluarga}}</td>
            </tr>
            <tr>
                <th width="170px" style="text-align: left;">Jumlah Lelaki Dewasa</th>
                <th width="10px">:</th>
                <td>{{$menyelamat->lelaki}}</td> 
                <th width="250px" style="text-align: left;">Jumlah Kanak-Kanak Lelaki</th>
                <th width="10px">:</th>
                <td>{{$menyelamat->kanak_lelaki}}</td> 
            </tr>
            <tr>
                <th width="200px" style="text-align: left;">Jumlah Perempuan Dewasa</th>
                <th width="10px">:</th>
                <td>{{$menyelamat->wanita}}</td>
                <th width="170px" style="text-align: left;">Jumlah Kanak-Kanak Perempuan</th>
                <th width="10px">:</th>
                <td>{{$menyelamat->kanak_perempuan}}</td>
            </tr>
            <tr>
                <th width="100px" style="text-align: left;">Jumlah</th>
                <th width="10px">:</th>
                <td>{{$menyelamat->total}}</td>
            </tr>
        </thead>
    </table>
    
  </body>
</html>