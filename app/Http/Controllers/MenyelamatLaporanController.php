<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menyelamat;
use Illuminate\Support\Facades\DB;


class MenyelamatLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menyelamats = Menyelamat::all();
        return view('menyelamatlaporan.index',['menyelamats'=>$menyelamats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
        $menyelamats = DB::table('menyelamat')->select(DB::raw('menyelamat.id, menyelamat.tarikh, menyelamat.jajahan, menyelamat.tempat_pemindahan, menyelamat.lokasi, menyelamat.total, menyelamat.pengesahan, menyelamat.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'menyelamat.user_id')
        ->where('menyelamat.id',$id)
        ->get();
        return view ('menyelamatlaporan.show',['menyelamats'=>$menyelamats]);
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
