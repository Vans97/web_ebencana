<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jajahan;
use App\Daerah;
use App\PeralatanPBSM;
use App\PusatPemindahan;
use Illuminate\Support\Facades\DB;

class PeralatanPBSMController extends Controller
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
        $peralatan_jajahan = Jajahan::all();
        $peralatan_daerah = Daerah::all();
        $peralatan_pemindahan = PusatPemindahan::all();
        return view ('peralatanpbsm.create',['peralatan_jajahan'=>$peralatan_jajahan, 'peralatan_daerah'=>$peralatan_daerah, 'peralatan_pemindahan'=>$peralatan_pemindahan]);
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
            'peralatan_jajahan'=>'required',
            'peralatan_daerah'=>'required',
            'peralatan_pemindahan'=>'required',
            'peralatan'=>'required',
            'kuantiti'=>'required',
            'keterangan'=>'required',
            
           
           
        ]);

        $peralatan = new PeralatanPBSM();
        $peralatan->tarikh_lapor = $request->input('tarikh_lapor');
        $peralatan->peralatan_jajahan = $request->input('peralatan_jajahan');
        $peralatan->peralatan_daerah = $request->input('peralatan_daerah');
        $peralatan->peralatan_pemindahan = $request->input('peralatan_pemindahan');
        $peralatan->peralatan = $request->input('peralatan');
        $peralatan->kuantiti = $request->input('kuantiti');
        $peralatan->keterangan = $request->input('keterangan');
        
      
        $peralatan->user_id =auth()->user()->id;
        $peralatan->save();
        
        return redirect('peralatanpbsm/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peralatans = DB::table('peralatan_pbsm')->select(DB::raw('peralatan_pbsm.id, peralatan_pbsm.tarikh_lapor, peralatan_pbsm.peralatan_jajahan, peralatan_pbsm.peralatan_daerah, peralatan_pbsm.peralatan_pemindahan, peralatan_pbsm.peralatan, peralatan_pbsm.kuantiti, peralatan_pbsm.keterangan, peralatan_pbsm.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'peralatan_pbsm.user_id')
        // ->leftJoin('daerah', 'daerah.kod', '=', 'peralatan_pbsm.bdaerah')
        // ->leftJoin('jajahan', 'kampung.kjajahan', '=', 'jajahan.kod')
        ->get();

        
        $peralatan_jajahan = Jajahan::all();
        $peralatan_daerah = Daerah::all();
        return view ('peralatanpbsm.show',['peralatans'=>$peralatans, 'peralatan_jajahan'=>$peralatan_jajahan, 'peralatan_daerah'=>$peralatan_daerah ]);
    }



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


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peralatan = PeralatanPBSM::find($id);
        return view ('peralatanpbsm.edit')->with('peralatan', $peralatan);
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
            'peralatan_jajahan'=>'required',
            'peralatan_daerah'=>'required',
            'peralatan_pemindahan'=>'required',
            'peralatan'=>'required',
            'kuantiti'=>'required',
            'keterangan'=>'required',
           
           
        ]);

        $peralatan = PeralatanPBSM::find($id);
        $peralatan->tarikh_lapor = $request->input('tarikh_lapor');
        $peralatan->peralatan_jajahan = $request->input('peralatan_jajahan');
        $peralatan->peralatan_daerah = $request->input('peralatan_daerah');
        $peralatan->peralatan_pemindahan = $request->input('peralatan_pemindahan');
        $peralatan->peralatan = $request->input('peralatan');
        $peralatan->kuantiti = $request->input('kuantiti');
        $peralatan->keterangan = $request->input('keterangan');

        $peralatan->save();

        return redirect('peralatanpbsm/show')->with('success','Data Telah Dikemaskini');
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
