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
   
    <center><b>Laporan Kes Kemalangan</b></center>

    <table class="center table-bordered" style="padding-top: 100px; padding-left: 50px;">
        <thead class="thead-dark">

            <tr>
                <th width="100px" style="text-align: left;">Jajahan</th>
                <th width="10px">:</th>
                <td width="400px">{{$kemalangan->jajahan}}</td>
                <td>Rekod</td>
                <td>:</td>
                <td>{{$kemalangan->pengesahan}}</td>
            </tr>
            <tr>
                <th width="100px" style="text-align: left;">Lokasi</th>
                <th width="10px">:</th>
                <td>{{$kemalangan->lokasi}}</td>
                <td>Tarikh Lapor</td>
                <td width="10px">:</td>
                <td>{{$kemalangan->t_lapor}}</td>
                
            </tr>
            <tr>
                <th width="100px" style="text-align: left;">Kemalangan</th>
                <th width="10px">:</th>
                <td>{{$kemalangan->kemalangan}}</td>
            </tr>
            <tr>
                <th width="100px" style="text-align: left;">Kesimpulan/Status</th>
                <th width="10px">:</th>
                <td>{{$kemalangan->status}}</td>
            </tr>
        </thead>
    </table>

    <hr style="width:60%;text-align:left;margin-left:50px">

<p style="padding-left: 50px;"><b>Mangsa</b></p>
    <table class="table table-bordered" style="padding-left: 50px;">
        <thead class="thead-dark">

            <tr>
                <th width="100px" style="text-align: left;">Nama</th>
                <th width="10px">:</th>
                <td width="400px">{{$kemalangan->nama_mangsa}}</td>
            </tr>
            <tr>
                <th width="130px" style="text-align: left;">Kad Pengenalan</th>
                <th width="10px">:</th>
                <td>{{$kemalangan->ic}}</td> 
            </tr>
            <tr>
                <th width="100px" style="text-align: left;">Jantina</th>
                <th width="10px">:</th>
                <td>{{$kemalangan->jantina}}</td>
                <td>Umur</td>
                <td width="10px">:</td>
                <td>gigygy</td>
            </tr>
            <tr>
                <th width="100px" style="text-align: left;">Bangsa</th>
                <th width="10px">:</th>
                <td>{{$kemalangan->bangsa}}</td>
            </tr>
            <tr>
                <th width="100px" style="text-align: left;">Alamat</th>
                <th width="10px">:</th>
                <td>{{$kemalangan->alamat}}</td>
            </tr>
            <tr>
                <th width="100px" style="text-align: left;">Tarikh Kemas:</th> 
                <th width="10px">:</th>
                <td>{{$kemalangan->updated_at}}</td>
            </tr>
            <tr>
                <th width="100px" style="text-align: left;">Dikemas Oleh</th> 
                <th width="10px">:</th>
                <td>CCCKEL</td>
            </tr>

        </thead>
    </table>
    
  </body>
</html>