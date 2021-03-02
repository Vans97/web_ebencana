<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Agihan;

class AgihanController extends Controller
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
        $agihan = Agihan::all();
        return view ('agihan.create');
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

            'kod'=>'required',
            'nama'=>'required',
            'keterangan'=>'required',
           
           
        ]);

        $agihan = new Agihan();
        $agihan->kod = $request->input('kod');
        $agihan->nama = $request->input('nama');
        $agihan->keterangan = $request->input('keterangan');
      
        $agihan->user_id =auth()->user()->id;
        $agihan->save();

       
       
        return redirect('agihan/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agihans = DB::table('jenisbarang')->select(DB::raw('jenisbarang.id, jenisbarang.kod, jenisbarang.nama, jenisbarang.keterangan, jenisbarang.updated_at, users.name'))
            ->leftJoin('users', 'users.id', '=', 'jenisbarang.user_id')
            ->get();
        return view ('agihan.show')->with('agihans', $agihans);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agihan = Agihan::find($id);
        // if(auth()->user()->id !== $jajahan->user_id){
        //     return redirect('calendar')->with('error','Unauthorized Page');
        // }
        return view ('agihan.edit')->with('agihan',$agihan);
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

            'kod'=>'required',
            'nama'=>'required',
            'keterangan'=>'required',
           
           
        ]);

        $agihan = Agihan::find($id);
        $agihan->kod = $request->input('kod');
        $agihan->nama = $request->input('nama');
        $agihan->keterangan = $request->input('keterangan');
      
        // $jajahan->user_id =auth()->user()->id;
        $agihan->save();

       
       
        return redirect('agihan/show')->with('success','Data Telah DiKemaskini');
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
