<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Agensi;

class AgensiController extends Controller
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
        $agensi = Agensi::all();
        return view ('agensi.create');
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
            'talian'=>'required',
            
           
           
        ]);

        $agensi = new Agensi();
        $agensi->kod = $request->input('kod');
        $agensi->nama = $request->input('nama');
        $agensi->talian = $request->input('talian');
        $agensi->user_id =auth()->user()->id;
        $agensi->save();

       
       
        return redirect('agensi/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $agensis = Agensi::all();

        $agensis = DB::table('agensi')->select(DB::raw('agensi.id, agensi.kod, agensi.nama, agensi.talian, agensi.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'agensi.user_id')
        ->get();
        return view ('agensi.show',['agensis'=>$agensis]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agensi = Agensi::find($id);
        // if(auth()->user()->id !== $jajahan->user_id){
        //     return redirect('calendar')->with('error','Unauthorized Page');
        // }
        return view ('agensi.edit')->with('agensi',$agensi);
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
            'talian'=>'required',
           
           
           
        ]);

        $agensi = Agensi::find($id);
        $agensi->kod = $request->input('kod');
        $agensi->nama = $request->input('nama');
        $agensi->talian = $request->input('talian');
       
      
        // $jajahan->user_id =auth()->user()->id;
        $agensi->save();

       
       
        return redirect('agensi/show')->with('success','Data Telah Dimasukkan');
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
