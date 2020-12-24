<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jajahan;
use Illuminate\Support\Facades\DB;
use App\Helikopter;

class HelikopterController extends Controller
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
        $helikopters = Jajahan::all();
        return view ('helikopter.create',['helikopters'=>$helikopters]);
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

            'hjajahan'=>'required',
            'lokasi'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'nota'=>'required',
           
           
        ]);

        $helikopter = new Helikopter();
        $helikopter->hjajahan = $request->input('hjajahan');
        $helikopter->lokasi = $request->input('lokasi');
        $helikopter->latitude = $request->input('latitude');
        $helikopter->longitude = $request->input('longitude');
        $helikopter->nota = $request->input('nota');
      
        $helikopter->user_id =auth()->user()->id;
        $helikopter->save();

       
       
        return redirect('helikopter/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $helikopters = DB::table('helikopter')->select(DB::raw('helikopter.id, helikopter.hjajahan, helikopter.lokasi,helikopter.latitude,helikopter.longitude, helikopter.nota, helikopter.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'helikopter.user_id')
        ->get();
        $jajahanj = Jajahan::all();
        return view ('helikopter.show',['helikopters'=>$helikopters, 'jajahanj'=>$jajahanj]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $helikopter = Helikopter::find($id);
        return view ('helikopter.edit')->with('helikopter',$helikopter);
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

            'hjajahan'=>'required',
            'lokasi'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'nota'=>'required',
           
           
        ]);

        $helikopter = Helikopter::find($id);
        $helikopter->hjajahan = $request->input('hjajahan');
        $helikopter->lokasi = $request->input('lokasi');
        $helikopter->latitude = $request->input('latitude');
        $helikopter->longitude = $request->input('longitude');
        $helikopter->nota = $request->input('nota');
        $helikopter->save();

       
       
        return redirect('helikopter/show')->with('success','Data Telah Dikemaskini');
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
