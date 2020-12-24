<?php

namespace App\Http\Controllers;

use App\Agihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Barang;


class BarangController extends Controller
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
        $barangs = Agihan::all();
        return view ('barang.create',['barangs'=>$barangs]);
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

            'jenis'=>'required',
            'nama'=>'required',
            'uom'=>'required',
           
           
        ]);

        $barang = new Barang();
        $barang->jenis = $request->input('jenis');
        $barang->nama = $request->input('nama');
        $barang->uom = $request->input('uom');
      
        $barang->user_id =auth()->user()->id;
        $barang->save();

       
       
        return redirect('barang/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangs = DB::table('barang')->select(DB::raw('barang.id, barang.jenis, barang.nama, barang.uom, barang.updated_at, users.name'))
            ->leftJoin('users', 'users.id', '=', 'barang.user_id')
            ->get();
        $barangh = Agihan::all(); 
        return view ('barang.show')->with(['barangs'=>$barangs, 'barangh'=>$barangh]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        // if(auth()->user()->id !== $jajahan->user_id){
        //     return redirect('calendar')->with('error','Unauthorized Page');
        // }
        return view ('barang.edit')->with('barang',$barang);
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

            'jenis'=>'required',
            'nama'=>'required',
            'uom'=>'required',
           
           
        ]);

        $barang = Barang::find($id);
        $barang->jenis = $request->input('jenis');
        $barang->nama = $request->input('nama');
        $barang->uom = $request->input('uom');
      
        // $jajahan->user_id =auth()->user()->id;
        $barang->save();

       
       
        return redirect('barang/show')->with('success','Data Telah DiKemaskini');
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
