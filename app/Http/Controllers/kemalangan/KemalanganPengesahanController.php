<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\KemalanganKemasukkan;

class KemalanganPengesahanController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kemalangans = DB::table('kemalangankemasukkan')->select(DB::raw('kemalangankemasukkan.id, kemalangankemasukkan.t_lapor, kemalangankemasukkan.jajahan, kemalangankemasukkan.lokasi, kemalangankemasukkan.kemalangan, kemalangankemasukkan.nama_mangsa, kemalangankemasukkan.ic,   kemalangankemasukkan.lokasi, kemalangankemasukkan.pengesahan, kemalangankemasukkan.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'kemalangankemasukkan.user_id')
        // ->where('kemalangankemasukkan.id',$id)
        ->get();

        // dd($kemalangans);

    return view ('kemalanganpengesahan.show')->with(['kemalangans'=> $kemalangans]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kemalangan = KemalanganKemasukkan::find($id);
        // if(auth()->user()->id !== $jajahan->user_id){
        //     return redirect('calendar')->with('error','Unauthorized Page');
        // }
        return view ('kemalanganpengesahan.edit')->with('kemalangan',$kemalangan);
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

            't_lapor'=>'required',
            'no_laporan'=>'required',
            'nama_balai'=>'required',
            'kemalangan'=>'required',
            'status'=>'required',
            't_dijumpai'=>'required',
            'lokasi'=>'required',
            'jajahan'=>'required',
            'nama_mangsa'=>'required',
            'ic'=>'required',
            'gambar'=>'required',
            'bangsa'=>'required',
            'jantina'=>'required',
            'alamat'=>'required',
            'pengesahan'=>'required',
            
           
           
        ]);

        $kemalangan = KemalanganKemasukkan::find($id);
        $kemalangan->t_lapor = $request->input('t_lapor');
        $kemalangan->no_laporan = $request->input('no_laporan');
        $kemalangan->nama_balai = $request->input('nama_balai');
        $kemalangan->kemalangan = $request->input('kemalangan');
        $kemalangan->status = $request->input('status');
        $kemalangan->t_dijumpai = $request->input('t_dijumpai');
        $kemalangan->lokasi = $request->input('lokasi');
        $kemalangan->jajahan = $request->input('jajahan');
        $kemalangan->nama_mangsa = $request->input('nama_mangsa');
        $kemalangan->ic = $request->input('ic');
        $kemalangan->gambar = $request->input('gambar');
        $kemalangan->bangsa = $request->input('bangsa');
        $kemalangan->jantina = $request->input('jantina');
        $kemalangan->alamat = $request->input('alamat');
        $kemalangan->pengesahan = $request->input('pengesahan');
        
        
      
        $kemalangan->save();

       
       
        return redirect('kemalanganpengesahan/show')->with('success','Data Telah Dimasukkan');
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
