<?php

namespace App\Http\Controllers;

use App\Kemalangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class KemalanganController extends Controller
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
        $kemalangan = Kemalangan::all();
        return view ('kemalangan.create');
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

            'kod'=>'required|unique:kemalangan',
            'nama'=>'required',
            'keterangan'=>'required',
           
           
        ]);

        $kemalangan = new Kemalangan();
        $kemalangan->kod = $request->input('kod');
        $kemalangan->nama = $request->input('nama');
        $kemalangan->keterangan = $request->input('keterangan');
      
        $kemalangan->user_id =auth()->user()->id;
        $kemalangan->save();

       
       
        return redirect('kemalangan/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kemalangans = DB::table('kemalangan')->select(DB::raw('kemalangan.id, kemalangan.kod, kemalangan.nama, kemalangan.keterangan, kemalangan.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'kemalangan.user_id')
        ->get();
    return view ('kemalangan.show')->with('kemalangans', $kemalangans);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kemalangan = Kemalangan::find($id);
        // if(auth()->user()->id !== $jajahan->user_id){
        //     return redirect('calendar')->with('error','Unauthorized Page');
        // }
        return view ('kemalangan.edit')->with('kemalangan',$kemalangan);
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

        $kemalangan = Kemalangan::find($id);
        $kemalangan->kod = $request->input('kod');
        $kemalangan->nama = $request->input('nama');
        $kemalangan->keterangan = $request->input('keterangan');
      
        // $jajahan->user_id =auth()->user()->id;
        $kemalangan->save();

       
       
        return redirect('kemalangan/show')->with('success','Data Telah DiKemaskini');
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
