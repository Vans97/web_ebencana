<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jajahan;
use App\Daerah;
use App\PenyakitDiperiksa;
use App\PusatPemindahan;
use Illuminate\Support\Facades\DB;

class PenyakitDiperiksaController extends Controller
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
        $penyakit_jajahan = Jajahan::all();
        $penyakit_daerah = Daerah::all();
        $penyakit_pemindahan = PusatPemindahan::all();
        return view ('penyakitdiperiksa.create',['penyakit_jajahan'=>$penyakit_jajahan, 'penyakit_daerah'=>$penyakit_daerah, 'penyakit_pemindahan'=>$penyakit_pemindahan]);
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
            'penyakit_jajahan'=>'required',
            'penyakit_daerah'=>'required',
            'penyakit_pemindahan'=>'required',
            'bil_penyakit_berjangkit'=>'required',
            'bil_penyakit_tidak_berjangkit'=>'required',
            'bil_kecederaan'=>'required',
            'bil_kematian'=>'required',
            'keterangan'=>'required',
            
           
           
        ]);

        $penyakit = new PenyakitDiperiksa();
        $penyakit->tarikh_lapor = $request->input('tarikh_lapor');
        $penyakit->penyakit_jajahan = $request->input('penyakit_jajahan');
        $penyakit->penyakit_daerah = $request->input('penyakit_daerah');
        $penyakit->penyakit_pemindahan = $request->input('penyakit_pemindahan');
        $penyakit->bil_penyakit_berjangkit = $request->input('bil_penyakit_berjangkit');
        $penyakit->bil_penyakit_tidak_berjangkit = $request->input('bil_penyakit_tidak_berjangkit');
        $penyakit->bil_kecederaan = $request->input('bil_kecederaan');
        $penyakit->bil_kematian = $request->input('bil_kematian');
        $penyakit->keterangan = $request->input('keterangan');
        
      
        $penyakit->user_id =auth()->user()->id;
        $penyakit->save();
        
        return redirect('penyakitdiperiksa/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penyakits = DB::table('penyakit_diperiksa')->select(DB::raw('penyakit_diperiksa.id, penyakit_diperiksa.tarikh_lapor, penyakit_diperiksa.penyakit_jajahan, penyakit_diperiksa.penyakit_daerah, penyakit_diperiksa.penyakit_pemindahan,penyakit_diperiksa.bil_penyakit_berjangkit, penyakit_diperiksa.bil_penyakit_tidak_berjangkit, penyakit_diperiksa.keterangan, penyakit_diperiksa.bil_kecederaan, penyakit_diperiksa.bil_kematian, penyakit_diperiksa.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'penyakit_diperiksa.user_id')
        // ->leftJoin('daerah', 'daerah.kod', '=', 'penyakit_diperiksa.bdaerah')
        // ->leftJoin('jajahan', 'kampung.kjajahan', '=', 'jajahan.kod')
        ->get();

        
        $penyakit_jajahan = Jajahan::all();
        $penyakit_daerah = Daerah::all();
        return view ('penyakitdiperiksa.show',['penyakits'=>$penyakits, 'penyakit_jajahan'=>$penyakit_jajahan, 'penyakit_daerah'=>$penyakit_daerah ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function findDaerahName(Request $request)
    {
         $data = Daerah::select('nama','kod')->where('djajahan', $request->id)->take(100)->get();
        
        return response()->json($data);

    }


    public function findPemindahanName(Request $request)
    {
         $data = PusatPemindahan::select('nama','lkod')->where('pdaerah', $request->id)->take(100)->get();
        
        return response()->json($data);

    }

    public function edit($id)
    {
        $penyakit = PenyakitDiperiksa::find($id);
        return view ('penyakitdiperiksa.edit')->with('penyakit', $penyakit);
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
            'penyakit_jajahan'=>'required',
            'penyakit_daerah'=>'required',
            'penyakit_pemindahan'=>'required',
            'bil_penyakit_berjangkit'=>'required',
            'bil_penyakit_tidak_berjangkit'=>'required',
            'bil_kecederaan'=>'required',
            'bil_kematian'=>'required',
            'keterangan'=>'required',
           
           
        ]);

        $penyakit = PenyakitDiperiksa::find($id);
        $penyakit->tarikh_lapor = $request->input('tarikh_lapor');
        $penyakit->penyakit_jajahan = $request->input('penyakit_jajahan');
        $penyakit->penyakit_daerah = $request->input('penyakit_daerah');
        $penyakit->penyakit_pemindahan = $request->input('penyakit_pemindahan');
        $penyakit->bil_penyakit_berjangkit = $request->input('bil_penyakit_berjangkit');
        $penyakit->bil_penyakit_tidak_berjangkit = $request->input('bil_penyakit_tidak_berjangkit');
        $penyakit->bil_kecederaan = $request->input('bil_kecederaan');
        $penyakit->bil_kematian = $request->input('bil_kematian');
        $penyakit->keterangan = $request->input('keterangan');

        $penyakit->save();

        return redirect('penyakitdiperiksa/show')->with('success','Data Telah Dikemaskini');
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
