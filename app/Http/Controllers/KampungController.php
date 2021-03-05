<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jajahan;
use App\Daerah;
use App\Kampung;
use Illuminate\Support\Facades\DB;

class KampungController extends Controller
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
        return view ('kampung.create',['kjajahan'=>$kjajahan, 'kdaerah'=>$kdaerah]);
    }


    // public function findDaerah( Request $request)
    // {
    //     $data = DB::table('daerah')->select(DB::raw('djajahan, kod'))
    //     ->leftJoin('daerah', 'daerah.djajahan', '=', 'jajahan.kod')
    //     ->where('id',$request->id)
    //     ->take(100)
    //     ->get();


    //     return response()->json($data);
    // }

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
            'lkod'=>'required',
            'nama'=>'required',
           
           
        ]);

        $kampung = new Kampung();
        $kampung->kjajahan = $request->input('kjajahan');
        $kampung->kdaerah = $request->input('kdaerah');
        $kampung->lkod = $request->input('lkod');
        $kampung->nama = $request->input('nama');
      
        $kampung->user_id =auth()->user()->id;
        $kampung->save();

       

       
       
        return redirect('kampung/show')->with('success','Data Telah Dimasukkan');
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
        
            // $daerahs = Daerah::all();
            $kampungs = DB::table('kampung')->select(DB::raw('jajahan.nama AS jah, kampung.nama, daerah.nama AS dah, kampung.kjajahan, kampung.kdaerah, kampung.lkod, kampung.updated_at, users.name'))
            ->leftJoin('users', 'users.id', '=', 'kampung.user_id')
            ->leftJoin('daerah', 'daerah.kod', '=', 'kampung.kdaerah')
            ->leftJoin('jajahan', 'kampung.kjajahan', '=', 'jajahan.kod')
            ->get();
    
            
            $kjajahan = Jajahan::all();
            $kampungd = Daerah::all();
            return view ('kampung.show',['kampungs'=>$kampungs, 'kjajahan'=>$kjajahan, 'kampungd'=>$kampungd ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kampung = Kampung::find($id);
        return view ('kampung.edit')->with('kampung', $kampung);
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

            // 'kjajahan'=>'required',
            'lkod'=>'required',
            'nama'=>'required',
           
           
        ]);

        $kampung = Kampung::find($id);
        // $kampung->kjajahan = $request->input('kjajahan');
        $kampung->lkod = $request->input('lkod');
        $kampung->nama = $request->input('nama');
      
        // $jajahan->user_id =auth()->user()->id;
        $kampung->save();

       
       
        return redirect('kampung/show')->with('success','Data Telah Dikemaskini');
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
