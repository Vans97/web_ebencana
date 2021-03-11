<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jajahan;
use App\Daerah;
use App\Fasiliti;
use App\Klinik;
use Illuminate\Support\Facades\DB;

class FasilitiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fjajahan = Jajahan::all();
        $fdaerah = Daerah::all();
        $fklinik = Klinik::all();
        return view ('fasiliti.create',['fjajahan'=>$fjajahan, 'fdaerah'=>$fdaerah, 'fklinik'=>$fklinik]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [


            'tarikh_lapor'=>'required',
            'fjajahan'=>'required',
            'fdaerah'=>'required',
            'fklinik'=>'required',
            'lokasi'=>'required',
            'keterangan'=>'required',
            'fasiliti_terlibat'=>'required',
            'jenis_kerosakan'=>'required',
           
           
        ]);

        $fasiliti = new Fasiliti();
        $fasiliti->tarikh_lapor = $request->input('tarikh_lapor');
        $fasiliti->fjajahan = $request->input('fjajahan');
        $fasiliti->fdaerah = $request->input('fdaerah');
        $fasiliti->fklinik = $request->input('fklinik');
        $fasiliti->lokasi = $request->input('lokasi');
        $fasiliti->keterangan = $request->input('keterangan');
        $fasiliti->fasiliti_terlibat = $request->input('fasiliti_terlibat');
        $fasiliti->jenis_kerosakan = $request->input('jenis_kerosakan');
      
        $fasiliti->user_id =auth()->user()->id;
        $fasiliti->save();
        
        return redirect('fasiliti/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasilitis = DB::table('fasiliti')->select(DB::raw('fasiliti.id, fasiliti.tarikh_lapor, fasiliti.fjajahan, fasiliti.fdaerah, fasiliti.fklinik, fasiliti.lokasi, fasiliti.fasiliti_terlibat, fasiliti.jenis_kerosakan, fasiliti.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'fasiliti.user_id')
        // ->leftJoin('daerah', 'daerah.kod', '=', 'kampung.kdaerah')
        // ->leftJoin('jajahan', 'kampung.kjajahan', '=', 'jajahan.kod')
        ->get();

        
        $fjajahan = Jajahan::all();
        $fdaerah = Daerah::all();
        return view ('fasiliti.show',['fasilitis'=>$fasilitis, 'fjajahan'=>$fjajahan, 'fdaerah'=>$fdaerah ]);
    }


    public function findDaerahName(Request $request)
    {
         $data = Daerah::select('nama','kod')->where('djajahan', $request->id)->take(100)->get();
        
        return response()->json($data);

    }


    public function findPemindahanName(Request $request)
    {
         $data = Klinik::select('nama','kod')->where('kdaerah', $request->id)->take(100)->get();
        
        return response()->json($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasiliti = Fasiliti::find($id);
        return view ('fasiliti.edit')->with('fasiliti', $fasiliti);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'tarikh_lapor'=>'required',
            'lokasi'=>'required',
            'keterangan'=>'required',
            'fasiliti_terlibat'=>'required',
            'jenis_kerosakan'=>'required',
           
           
        ]);

        $fasiliti = Fasiliti::find($id);
        $fasiliti->tarikh_lapor = $request->input('tarikh_lapor');
        $fasiliti->lokasi = $request->input('lokasi');
        $fasiliti->keterangan = $request->input('keterangan');
        $fasiliti->fasiliti_terlibat = $request->input('fasiliti_terlibat');
        $fasiliti->jenis_kerosakan = $request->input('jenis_kerosakan');

        $fasiliti->save();

        return redirect('fasiliti/show')->with('success','Data Telah Dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
