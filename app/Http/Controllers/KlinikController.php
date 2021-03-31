<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jajahan;
use App\Daerah;
use App\Klinik;
use Illuminate\Support\Facades\DB;

class KlinikController extends Controller
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
        $kjajahan = Jajahan::all();
        $kdaerah = Daerah::all();
        return view ('klinik.create',['kjajahan'=>$kjajahan, 'kdaerah'=>$kdaerah]);
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

            'kjajahan'=>'required',
            'kdaerah'=>'required',
            'kod'=>'required|unique:klinik',
            'nama'=>'required',
            'no_talian'=>'required',
           
           
        ]);

        $klinik = new Klinik();
        $klinik->kjajahan = $request->input('kjajahan');
        $klinik->kdaerah = $request->input('kdaerah');
        $klinik->kod = $request->input('kod');
        $klinik->nama = $request->input('nama');
        $klinik->no_talian = $request->input('no_talian');
      
        $klinik->user_id =auth()->user()->id;
        $klinik->save();
        
        return redirect('klinik/show')->with('success','Data Telah Dimasukkan');
    }

    public function findDaerahName(Request $request)
    {
         $data = Daerah::select('nama','kod')->where('djajahan', $request->id)->take(100)->get();
        
        return response()->json($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kliniks = DB::table('klinik')->select(DB::raw('jajahan.nama AS jah, klinik.nama, klinik.no_talian, daerah.nama AS dah, klinik.kjajahan, klinik.kdaerah, klinik.kod, klinik.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'klinik.user_id')
        ->leftJoin('daerah', 'daerah.kod', '=', 'klinik.kdaerah')
        ->leftJoin('jajahan', 'klinik.kjajahan', '=', 'jajahan.kod')
        ->get();

        
        $kjajahan = Jajahan::all();
        $kdaerah = Daerah::all();
        return view ('klinik.show',['kliniks'=>$kliniks, 'kjajahan'=>$kjajahan, 'kdaerah'=>$kdaerah ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $klinik = Klinik::find($id);
        return view ('klinik.edit')->with('klinik', $klinik);
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
            'no_talian'=>'required',
           
           
        ]);

        $klinik = Klinik::find($id);
        $klinik->kod = $request->input('kod');
        $klinik->nama = $request->input('nama');
        $klinik->no_talian = $request->input('no_talian');
      
        // $jajahan->user_id =auth()->user()->id;
        $klinik->save();

       
       
        return redirect('klinik/show')->with('success','Data Telah Dikemaskini');
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
