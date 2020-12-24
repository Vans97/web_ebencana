<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Pkob;

class PkobController extends Controller
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
        $pkob = Pkob::all();
        return view ('pkob.create');
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

        $pkob = new Pkob();
        $pkob->kod = $request->input('kod');
        $pkob->nama = $request->input('nama');
       
      
        $pkob->user_id =auth()->user()->id;
        $pkob->save();

       
       
        return redirect('pkob/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pkobs = DB::table('pkob')->select(DB::raw('pkob.id, pkob.kod, pkob.nama, pkob.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'pkob.user_id')
        ->get();
        return view ('pkob.show',['pkobs'=>$pkobs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pkob = Pkob::find($id);
        // if(auth()->user()->id !== $jajahan->user_id){
        //     return redirect('calendar')->with('error','Unauthorized Page');
        // }
        return view ('pkob.edit')->with('pkob',$pkob);
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

        $pkob = Pkob::find($id);
        $pkob->kod = $request->input('kod');
        $pkob->nama = $request->input('nama');
      
      
        // $jajahan->user_id =auth()->user()->id;
        $pkob->save();

       
       
        return redirect('pkob/show')->with('success','Data Telah Dimasukkan');
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
