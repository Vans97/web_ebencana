<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jajahan;
use App\Daerah;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
