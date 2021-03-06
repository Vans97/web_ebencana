<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daerah;
use App\Jajahan;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class DaerahController extends Controller
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
        $daerah = Jajahan::all();
        return view ('daerah.create',['daerah'=>$daerah]);
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

            'kod'=>'required|unique:daerah',
            'nama'=>'required',
            'djajahan'=>'required',
           
           
        ]);

        $daerah = new Daerah();
        $daerah->kod = $request->input('kod');
        $daerah->nama = $request->input('nama');
        $daerah->djajahan = $request->input('djajahan');
      
        $daerah->user_id =auth()->user()->id;
        $daerah->save();

       
       
        return redirect('daerah/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $daerahs = Daerah::all();
        $daerahs = DB::table('daerah')->select(DB::raw('jajahan.nama AS jah, daerah.kod, daerah.nama, daerah.djajahan, daerah.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'daerah.user_id')
        ->leftJoin('jajahan', 'daerah.djajahan', '=', 'jajahan.kod')
        ->orderBy('jah')
        ->get();

        
        $daerahj = Jajahan::all();
        return view ('daerah.show',['daerahs'=>$daerahs, 'daerahj'=>$daerahj]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daerah = Daerah::find($id);
        return view ('daerah.edit')->with('daerah',$daerah);
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

        $daerah = Daerah::find($id);
        $daerah->kod = $request->input('kod');
        $daerah->nama = $request->input('nama');
       
      
        // $jajahan->user_id =auth()->user()->id;
        $daerah->save();

       
       
        return redirect('daerah/show')->with('success','Data Telah Dikemaskini');
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
