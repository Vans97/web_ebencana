<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Kemasukkan;
use App\Barang;

class KemasukkanController extends Controller
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
        $kemasukkans = Barang::all();
        return view ('kemasukkan.create',['kemasukkans'=>$kemasukkans]);
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

            'fasa'=>'required',
            'nota'=>'required',
            't_mohon'=>'required',
            't_sampai'=>'required',
            'barang'=>'required',
            'uom'=>'required',
            'kuantiti'=>'required',
            'harga'=>'required',
            'total'=>'required',
           
           
        ]);

        $kemasukkan = new Kemasukkan();
        $kemasukkan->fasa = $request->input('fasa');
        $kemasukkan->nota = $request->input('nota');
        $kemasukkan->t_mohon = $request->input('t_mohon');
        $kemasukkan->t_sampai = $request->input('t_sampai');
        $kemasukkan->barang = $request->input('barang');
        $kemasukkan->uom = $request->input('uom');
        $kemasukkan->kuantiti = $request->input('kuantiti');
        $kemasukkan->harga = $request->input('harga');
        $kemasukkan->total = $request->input('total');
       
      
        $kemasukkan->user_id =auth()->user()->id;
        $kemasukkan->save();

       
       
        return redirect('kemasukkan/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kemasukkans = DB::table('kemasukkan')->select(DB::raw('kemasukkan.id, kemasukkan.fasa, kemasukkan.nota, kemasukkan.t_mohon, kemasukkan.t_sampai, kemasukkan.barang, kemasukkan.uom, kemasukkan.kuantiti, kemasukkan.harga, kemasukkan.total, kemasukkan.updated_at, users.name'))
            ->leftJoin('users', 'users.id', '=', 'kemasukkan.user_id')
            ->get();
        $kemasukkanj = Barang::all(); 
        
        // $kemasukkans = DB::table('kemasukkan')->sum('total');
        return view ('kemasukkan.show')->with(['kemasukkans'=>$kemasukkans, 'kemasukkanj'=>$kemasukkanj]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kemasukkan = Kemasukkan::find($id);
        // if(auth()->user()->id !== $jajahan->user_id){
        //     return redirect('calendar')->with('error','Unauthorized Page');
        // }
        return view ('kemasukkan.edit')->with('kemasukkan',$kemasukkan);
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

            'fasa'=>'required',
            'nota'=>'required',
            't_mohon'=>'required',
            't_sampai'=>'required',
            'barang'=>'required',
            'uom'=>'required',
            'kuantiti'=>'required',
            'harga'=>'required',
            'total'=>'required',
           
           
        ]);

        $kemasukkan = Kemasukkan::find($id);
        $kemasukkan->fasa = $request->input('fasa');
        $kemasukkan->nota = $request->input('nota');
        $kemasukkan->t_mohon = $request->input('t_mohon');
        $kemasukkan->t_sampai = $request->input('t_sampai');
        $kemasukkan->barang = $request->input('barang');
        $kemasukkan->uom = $request->input('uom');
        $kemasukkan->kuantiti = $request->input('kuantiti');
        $kemasukkan->harga = $request->input('harga');
        $kemasukkan->total = $request->input('total');
       
      
        $kemasukkan->save();

       
       
        return redirect('kemasukkan/show')->with('success','Data Telah Dimasukkan');
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
