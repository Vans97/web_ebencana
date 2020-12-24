<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agensi;
use App\Pkob;
use App\Aset;
use App\KelengkapanAgensi;
use Illuminate\Support\Facades\DB;


class KelengkapanAgensiController extends Controller
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
        $agensis = Agensi::all();
        $pkobs = Pkob::all();
        $asets = Aset::all();
        return view ('kelengkapanagensi.create',['agensis'=>$agensis, 'pkobs'=>$pkobs, 'asets'=>$asets ]);
        
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

            'kjabatan'=>'required',
            'kpkob'=>'required',
            'kaset'=>'required',
            'kuantiti'=>'required',
            'nota'=>'required',
           
           
        ]);

        $kelengkapan = new KelengkapanAgensi();
        $kelengkapan->kjabatan = $request->input('kjabatan');
        $kelengkapan->kpkob = $request->input('kpkob');
        $kelengkapan->kaset = $request->input('kaset');
        $kelengkapan->kuantiti = $request->input('kuantiti');
        $kelengkapan->nota = $request->input('nota');
      
        $kelengkapan->user_id =auth()->user()->id;
        $kelengkapan->save();

       
       
        return redirect('kelengkapanagensi/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelengkapans = DB::table('kelengkapanagensi')->select(DB::raw('kelengkapanagensi.id,kelengkapanagensi.kjabatan, kelengkapanagensi.kpkob, kelengkapanagensi.kaset, kelengkapanagensi.kuantiti, kelengkapanagensi.nota, kelengkapanagensi.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'kelengkapanagensi.user_id')
        ->get();
       
        $agensis = Agensi::all();
        $pkobs = Pkob::all();
        $asets = Aset::all();
        
        return view ('kelengkapanagensi.show',['kelengkapans'=>$kelengkapans,'agensis'=>$agensis, 'pkobs'=>$pkobs, 'asets'=>$asets]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelengkapan = KelengkapanAgensi::find($id);
        // if(auth()->user()->id !== $jajahan->user_id){
        //     return redirect('calendar')->with('error','Unauthorized Page');
        // }
        return view ('kelengkapanagensi.edit')->with('kelengkapan',$kelengkapan);
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

            'kjabatan'=>'required',
            'kpkob'=>'required',
            'kaset'=>'required',
            'kuantiti'=>'required',
            'nota'=>'required',
           
           
        ]);

        $kelengkapan = KelengkapanAgensi::find($id);

        $kelengkapan->kjabatan = $request->input('kjabatan');
        $kelengkapan->kpkob = $request->input('kpkob');
        $kelengkapan->kaset = $request->input('kaset');
        $kelengkapan->kuantiti = $request->input('kuantiti');
        $kelengkapan->nota = $request->input('nota');
      
        
        $kelengkapan->save();

       
       
        return redirect('kelengkapanagensi/show')->with('success','Data Telah Dikemaskini');
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
