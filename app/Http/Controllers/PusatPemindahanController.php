<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daerah;
use App\Jajahan;
use App\PusatPemindahan;
use Illuminate\Support\Facades\DB;


class PusatPemindahanController extends Controller
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
        $pjajahan = Jajahan::all();
        $pdaerah = Daerah::all();

        return view('pusatpemindahan.create', ['pjajahan'=>$pjajahan, 'pdaerah'=>$pdaerah]);

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

            'pjajahan'=>'required',
            'pdaerah'=>'required',
            'lkod'=>'required',
            'nama'=>'required',
            'had'=>'required',
            'keterangan'=>'required',
           
           
        ]);

        $pemindahan = new PusatPemindahan();
        $pemindahan->pjajahan = $request->input('pjajahan');
        $pemindahan->pdaerah = $request->input('pdaerah');
        $pemindahan->lkod = $request->input('lkod');
        $pemindahan->nama = $request->input('nama');
        $pemindahan->had = $request->input('had');
        $pemindahan->keterangan = $request->input('keterangan');
      
        $pemindahan->user_id =auth()->user()->id;
        $pemindahan->save();

       
       
        return redirect('pusatpemindahan/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pusats = DB::table('pusat_pemindahan')->select(DB::raw('jajahan.nama AS jah, daerah.nama AS dah, pusat_pemindahan.nama AS pp, pusat_pemindahan.id, pusat_pemindahan.pjajahan, pusat_pemindahan.pdaerah, pusat_pemindahan.lkod, pusat_pemindahan.had, pusat_pemindahan.updated_at, users.name'))
            ->leftJoin('users', 'users.id', '=', 'pusat_pemindahan.user_id')
            ->leftJoin('daerah', 'daerah.kod', '=', 'pusat_pemindahan.pdaerah')
            ->leftJoin('jajahan', 'daerah.djajahan', '=', 'jajahan.kod')
            ->get();
    
            
            $pjajahan = Jajahan::all();
            $pdaerah = Daerah::all();
            return view ('pusatpemindahan.show',['pusats'=>$pusats, 'pjajahan'=>$pjajahan, 'pdaerah'=>$pdaerah ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pusat = PusatPemindahan::find($id);
        return view ('pusatpemindahan.edit')->with('pusat', $pusat);
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

            // 'kjajahan'=>'required',
            'nama'=>'required',
            'had'=>'required',
            'keterangan'=>'required',
           
           
        ]);

        $pusat = PusatPemindahan::find($id);
        // $kampung->kjajahan = $request->input('kjajahan');
        $pusat->had = $request->input('had');
        $pusat->nama = $request->input('nama');
        $pusat->keterangan = $request->input('keterangan');
      
        // $jajahan->user_id =auth()->user()->id;
        $pusat->save();

       
       
        return redirect('pusatpemindahan/show')->with('success','Data Telah Dikemaskini');
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
