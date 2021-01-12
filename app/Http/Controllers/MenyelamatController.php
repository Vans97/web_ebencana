<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jajahan;
use App\Menyelamat;

class MenyelamatController extends Controller
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
        $jajahans = Jajahan::all();
        return view ('menyelamat.create',['jajahans'=>$jajahans]);
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

            'tarikh'=>'required',
            'jajahan'=>'required',
            'lokasi'=>'required',
            'tempat_pemindahan'=>'required',
            'keterangan'=>'required',
            'keluarga'=>'required',
            'lelaki'=>'required',
            'wanita'=>'required',
            'kanak_lelaki'=>'required',
            'kanak_perempuan'=>'required',
            'pengesahan'=>'required',
            'total'=>'required',
           
           
        ]);

        $menyelamat = new Menyelamat();
        $menyelamat->tarikh = $request->input('tarikh');
        $menyelamat->jajahan = $request->input('jajahan');
        $menyelamat->lokasi = $request->input('lokasi');
        $menyelamat->tempat_pemindahan = $request->input('tempat_pemindahan');
        $menyelamat->keterangan = $request->input('keterangan');
        $menyelamat->keluarga = $request->input('keluarga');
        $menyelamat->lelaki = $request->input('lelaki');
        $menyelamat->wanita = $request->input('wanita');
        $menyelamat->kanak_lelaki = $request->input('kanak_lelaki');
        $menyelamat->kanak_perempuan = $request->input('kanak_perempuan');
        $menyelamat->pengesahan = $request->input('pengesahan');
        $menyelamat->total = $request->input('total');
        $menyelamat->user_id =auth()->user()->id;
        $menyelamat->save();

       
        
        return redirect('menyelamat/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menyelamats = DB::table('menyelamat')->select(DB::raw('menyelamat.id, menyelamat.tarikh, menyelamat.jajahan, menyelamat.tempat_pemindahan, menyelamat.lokasi, menyelamat.total, menyelamat.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'menyelamat.user_id')
        ->get();
        $jajahans = Jajahan::all();
        return view ('menyelamat.show',['menyelamats'=>$menyelamats, 'jajahans'=>$jajahans]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menyelamat = Menyelamat::find($id);
        return view ('menyelamat.edit')->with('menyelamat',$menyelamat);
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

            'tarikh'=>'required',
            'jajahan'=>'required',
            'lokasi'=>'required',
            'tempat_pemindahan'=>'required',
            'keterangan'=>'required',
            'keluarga'=>'required',
            'lelaki'=>'required',
            'wanita'=>'required',
            'kanak_lelaki'=>'required',
            'kanak_perempuan'=>'required',
            'pengesahan'=>'required',
            'total'=>'required',
           
           
        ]);

       
        $menyelamat = Menyelamat::find($id);
        $menyelamat->tarikh = $request->input('tarikh');
        $menyelamat->jajahan = $request->input('jajahan');
        $menyelamat->lokasi = $request->input('lokasi');
        $menyelamat->tempat_pemindahan = $request->input('tempat_pemindahan');
        $menyelamat->keterangan = $request->input('keterangan');
        $menyelamat->keluarga = $request->input('keluarga');
        $menyelamat->lelaki = $request->input('lelaki');
        $menyelamat->wanita = $request->input('wanita');
        $menyelamat->kanak_lelaki = $request->input('kanak_lelaki');
        $menyelamat->kanak_perempuan = $request->input('kanak_perempuan');
        $menyelamat->pengesahan = $request->input('pengesahan');
        $menyelamat->total = $request->input('total');
        
        $menyelamat->save();

       
        
        return redirect('menyelamat/show')->with('success','Data Telah Dikemaskini');
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
