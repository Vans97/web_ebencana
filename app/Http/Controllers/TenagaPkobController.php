<?php

namespace App\Http\Controllers;

use App\TenagaPkob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pkob;


class TenagaPkobController extends Controller
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
        $pkobs = Pkob::all();
        return view ('tenagapkob.create',['pkobs'=>$pkobs]);
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

            'tahun'=>'required',
            'pkob'=>'required',
            'pengawal'=>'required',
            'awam'=>'required',
            'petugas'=>'required',
            
           
           
        ]);

        $pkob = new TenagaPkob();
        $pkob->tahun = $request->input('tahun');
        $pkob->pkob = $request->input('pkob');
        $pkob->pengawal = $request->input('pengawal');
        $pkob->awam = $request->input('awam');
        $pkob->petugas = $request->input('petugas');
      
        $pkob->user_id =auth()->user()->id;
        $pkob->save();

       
       
        return redirect('tenagapkob/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pkobs = DB::table('tenagapkob')->select(DB::raw('tenagapkob.id, tenagapkob.tahun, tenagapkob.pkob, tenagapkob.pengawal, tenagapkob.awam, tenagapkob.petugas, tenagapkob.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'tenagapkob.user_id')
        ->get();
        $pkobc = Pkob::all();
        
        return view ('tenagapkob.show',['pkobs'=>$pkobs, 'pkobc'=>$pkobc]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pkob = TenagaPkob::find($id);
        return view ('tenagapkob.edit')->with('pkob',$pkob);
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

            'tahun'=>'required',
            'pkob'=>'required',
            'pengawal'=>'required',
            'awam'=>'required',
            'petugas'=>'required',
           
           
        ]);

        $pkob = TenagaPkob::find($id);
        $pkob->tahun = $request->input('tahun');
        $pkob->pkob = $request->input('pkob');
        $pkob->pengawal = $request->input('pengawal');
        $pkob->awam = $request->input('awam');
        $pkob->petugas = $request->input('petugas');
      
        // $jajahan->user_id =auth()->user()->id;
        $pkob->save();

       
       
        return redirect('tenagapkob/show')->with('success','Data Telah Dikemaskini');
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
