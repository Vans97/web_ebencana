<?php

namespace App\Http\Controllers;

use App\BilPasukan;
use Illuminate\Http\Request;
use App\Jajahan;
use App\Daerah;
use App\PusatPemindahan;
use Illuminate\Support\Facades\DB;

class BilPasukanController extends Controller
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
        $bjajahan = Jajahan::all();
        $bdaerah = Daerah::all();
        $bpemindahan = PusatPemindahan::all();
        return view ('bilpasukan.create',['bjajahan'=>$bjajahan, 'bdaerah'=>$bdaerah, 'bpemindahan'=>$bpemindahan]);
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


            'tarikh_lapor'=>'required',
            'bjajahan'=>'required',
            'bdaerah'=>'required',
            'bpemindahan'=>'required',
            'bil_pasukan_kesihatan'=>'required',
            'bil_pasukan_perubatan'=>'required',
            'keterangan'=>'required',
            
           
           
        ]);

        $pasukan = new BilPasukan();
        $pasukan->tarikh_lapor = $request->input('tarikh_lapor');
        $pasukan->bjajahan = $request->input('bjajahan');
        $pasukan->bdaerah = $request->input('bdaerah');
        $pasukan->bpemindahan = $request->input('bpemindahan');
        $pasukan->bil_pasukan_kesihatan = $request->input('bil_pasukan_kesihatan');
        $pasukan->bil_pasukan_perubatan = $request->input('bil_pasukan_perubatan');
        $pasukan->keterangan = $request->input('keterangan');
        
      
        $pasukan->user_id =auth()->user()->id;
        $pasukan->save();
        
        return redirect('bilpasukan/show')->with('success','Data Telah Dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasukans = DB::table('bilangan_pasukan')->select(DB::raw('bilangan_pasukan.id, bilangan_pasukan.tarikh_lapor, bilangan_pasukan.bjajahan, bilangan_pasukan.bdaerah, bilangan_pasukan.bpemindahan, bilangan_pasukan.bil_pasukan_kesihatan, bilangan_pasukan.bil_pasukan_perubatan, bilangan_pasukan.keterangan, bilangan_pasukan.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'bilangan_pasukan.user_id')
        // ->leftJoin('daerah', 'daerah.kod', '=', 'bilangan_pasukan.bdaerah')
        // ->leftJoin('jajahan', 'kampung.kjajahan', '=', 'jajahan.kod')
        ->get();

        
        $bjajahan = Jajahan::all();
        $bdaerah = Daerah::all();
        return view ('bilpasukan.show',['pasukans'=>$pasukans, 'bjajahan'=>$bjajahan, 'bdaerah'=>$bdaerah ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function findDaerahName(Request $request)
    {
         $data = Daerah::select('nama','kod')->where('djajahan', $request->id)->take(100)->get();
        
        return response()->json($data);

    }


    public function findPemindahanName(Request $request)
    {
         $data = PusatPemindahan::select('nama','lkod')->where('pdaerah', $request->id)->take(100)->get();
        
        return response()->json($data);

    }

    public function edit($id)
    {
        $pasukan = BilPasukan::find($id);
        return view ('bilpasukan.edit')->with('pasukan', $pasukan);
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

            'tarikh_lapor'=>'required',
            'bjajahan'=>'required',
            'bdaerah'=>'required',
            'bpemindahan'=>'required',
            'bil_pasukan_kesihatan'=>'required',
            'bil_pasukan_perubatan'=>'required',
            'keterangan'=>'required',
           
           
        ]);

        $pasukan = BilPasukan::find($id);
        $pasukan->tarikh_lapor = $request->input('tarikh_lapor');
        $pasukan->bjajahan = $request->input('bjajahan');
        $pasukan->bdaerah = $request->input('bdaerah');
        $pasukan->bpemindahan = $request->input('bpemindahan');
        $pasukan->bil_pasukan_kesihatan = $request->input('bil_pasukan_kesihatan');
        $pasukan->bil_pasukan_perubatan = $request->input('bil_pasukan_perubatan');
        $pasukan->keterangan = $request->input('keterangan');

        $pasukan->save();

        return redirect('bilpasukan/show')->with('success','Data Telah Dikemaskini');
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
