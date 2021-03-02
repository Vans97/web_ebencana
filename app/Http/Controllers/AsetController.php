<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Aset;

class AsetController extends Controller
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
        $aset = Aset::all();
        return view ('aset.create');
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
           
           
           
        ]);

        $aset = new Aset();
        $aset->kod = $request->input('kod');
        $aset->nama = $request->input('nama');
       
      
        $aset->user_id =auth()->user()->id;
        $aset->save();

       
       
        return redirect('aset/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asets = DB::table('aset')->select(DB::raw('aset.id, aset.kod, aset.nama, aset.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'aset.user_id')
        ->get();
        return view ('aset.show',['asets'=>$asets]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aset = Aset::find($id);
        // if(auth()->user()->id !== $jajahan->user_id){
        //     return redirect('calendar')->with('error','Unauthorized Page');
        // }
        return view ('aset.edit')->with('aset',$aset);
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
           
           
           
        ]);

        $aset = Aset::find($id);
        $aset->kod = $request->input('kod');
        $aset->nama = $request->input('nama');
      
      
        // $jajahan->user_id =auth()->user()->id;
        $aset->save();

       
       
        return redirect('aset/show')->with('success','Data Telah Dimasukkan');
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
