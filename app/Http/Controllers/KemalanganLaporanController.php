<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KemalanganKemasukkan;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Response;   

class KemalanganLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kemalangank = KemalanganKemasukkan::all();
        return view('kemalanganlaporan.index',['kemalangank'=>$kemalangank]);
    }


    public function downloadPDF($id) 
    {
        
        $kemalangan = KemalanganKemasukkan::find($id);
        $pdf = PDF::loadView('kemalanganlaporan.pdf', compact('kemalangan'));
        
        return $pdf->download('laporan.pdf');
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
        $kemalangans = DB::table('kemalangankemasukkan')->select(DB::raw('kemalangankemasukkan.id, kemalangankemasukkan.t_lapor, kemalangankemasukkan.jajahan, kemalangankemasukkan.lokasi, kemalangankemasukkan.kemalangan, kemalangankemasukkan.nama_mangsa, kemalangankemasukkan.ic,   kemalangankemasukkan.lokasi, kemalangankemasukkan.pengesahan, kemalangankemasukkan.updated_at, users.name'))
        ->leftJoin('users', 'users.id', '=', 'kemalangankemasukkan.user_id')
        ->where('kemalangankemasukkan.id',$id)
        ->get();

        

    return view ('kemalanganlapora  n.show')->with(['kemalangans'=> $kemalangans]);

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
