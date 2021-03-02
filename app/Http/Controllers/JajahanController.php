<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jajahan;
use App\User;

class JajahanController extends Controller
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
        $jajahan = Jajahan::all();
        return view ('jajahan.create');
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

        $jajahan = new Jajahan();
        $jajahan->kod = $request->input('kod');
        $jajahan->nama = $request->input('nama');
        $jajahan->keterangan = $request->input('keterangan');
      
        $jajahan->user_id =auth()->user()->id;
        $jajahan->save();

       
       
        return redirect('jajahan/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $jajahans = Jajahan::all();
        // return view ('jajahan.show',['jajahans'=>$jajahans]);

        $jajahans = DB::table('jajahan')->select(DB::raw('jajahan.kod, jajahan.nama, jajahan.keterangan, jajahan.updated_at, users.name'))
            ->leftJoin('users', 'users.id', '=', 'jajahan.user_id')
            ->get();
        return view ('jajahan.show')->with('jajahans', $jajahans);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jajahan = Jajahan::find($id);
        // if(auth()->user()->id !== $jajahan->user_id){
        //     return redirect('calendar')->with('error','Unauthorized Page');
        // }
        
        return view ('jajahan.edit')->with('jajahan',$jajahan);
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

        $jajahan = Jajahan::find($id);
        $jajahan->kod = $request->input('kod');
        $jajahan->nama = $request->input('nama');
        $jajahan->keterangan = $request->input('keterangan');
      
        // $jajahan->user_id =auth()->user()->id;
        $jajahan->save();

       
       
        return redirect('jajahan/show')->with('success','Data Telah DiKemaskini');
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
