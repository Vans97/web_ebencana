<?php

namespace App\Http\Controllers;

use App\BilPetugas;
use Illuminate\Http\Request;
use App\Jajahan;
use App\Daerah;
use App\PusatPemindahan;
use Illuminate\Support\Facades\DB;

class BilPetugasController extends Controller
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
        $bjajahan = Jajahan::all();
        $bdaerah = Daerah::all();
        $bpemindahan = PusatPemindahan::all();
        return view ('bilpetugas.create',['bjajahan'=>$bjajahan, 'bdaerah'=>$bdaerah, 'bpemindahan'=>$bpemindahan]);
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
            'bjajahan'=>'required',
            'bdaerah'=>'required',
            'bpemindahan'=>'required',
            'bil_lelaki'=>'required',
            'bil_perempuan'=>'required',
            'keterangan'=>'required',
            
           
           
        ]);

        $petugas = new BilPetugas();
        $petugas->tarikh_lapor = $request->input('tarikh_lapor');
        $petugas->bjajahan = $request->input('bjajahan');
        $petugas->bdaerah = $request->input('bdaerah');
        $petugas->bpemindahan = $request->input('bpemindahan');
        $petugas->bil_lelaki = $request->input('bil_lelaki');
        $petugas->bil_perempuan = $request->input('bil_perempuan');
        $petugas->keterangan = $request->input('keterangan');
        
      
        $petugas->user_id =auth()->user()->id;
        $petugas->save();
        
        return redirect('bilpetugas/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $petugass = DB::table('bilangan_petugas')->select(DB::raw('bilangan_petugas.id, bilangan_petugas.tarikh_lapor, bilangan_petugas.bjajahan, bilangan_petugas.bdaerah, bilangan_petugas.bpemindahan, bilangan_petugas.bil_lelaki, bilangan_petugas.bil_perempuan, bilangan_petugas.keterangan, bilangan_petugas.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'bilangan_petugas.user_id')
        // ->leftJoin('daerah', 'daerah.kod', '=', 'bilangan_petugas.bdaerah')
        // ->leftJoin('jajahan', 'kampung.kjajahan', '=', 'jajahan.kod')
        ->get();

        
        $bjajahan = Jajahan::all();
        $bdaerah = Daerah::all();
        return view ('bilpetugas.show',['petugass'=>$petugass, 'bjajahan'=>$bjajahan, 'bdaerah'=>$bdaerah ]);
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
        $petugas = BilPetugas::find($id);
        return view ('bilpetugas.edit')->with('petugas', $petugas);
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
            'bjajahan'=>'required',
            'bdaerah'=>'required',
            'bpemindahan'=>'required',
            'bil_lelaki'=>'required',
            'bil_perempuan'=>'required',
            'keterangan'=>'required',
           
           
        ]);

        $petugas = BilPetugas::find($id);
        $petugas->tarikh_lapor = $request->input('tarikh_lapor');
        $petugas->bjajahan = $request->input('bjajahan');
        $petugas->bdaerah = $request->input('bdaerah');
        $petugas->bpemindahan = $request->input('bpemindahan');
        $petugas->bil_lelaki = $request->input('bil_lelaki');
        $petugas->bil_perempuan = $request->input('bil_perempuan');
        $petugas->keterangan = $request->input('keterangan');

        $petugas->save();

        return redirect('bilpetugas/show')->with('success','Data Telah Dikemaskini');
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
