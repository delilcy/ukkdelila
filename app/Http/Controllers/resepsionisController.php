<?php

namespace App\Http\Controllers;

use App\reservasi;
use Illuminate\Http\Request;

class resepsionisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservasi = reservasi::latest()->paginate(10);
        return view('reservasi.index', compact('reservasi'));
    }

    public function search(Request $request)
    {
        $reservasi=  DB::table('reservasi')->where('nm_tamu', $request->nm_tamu )->get();
        return view('reservasi.index', compact('reservasi'));
    }
    public function filter(Request $request)
    {
        $reservasi=  DB::table('reservasi')->where('tglcekin', $request->tglcekin )->get();
        return view('reservasi.index', compact('reservasi'));
    }

    /**
     * Show the form for creating a new resource.
     *\
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
     * @param  \App\resepsionis  $resepsionis
     * @return \Illuminate\Http\Response
     */
    public function show(resepsionis $resepsionis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\resepsionis  $resepsionis
     * @return \Illuminate\Http\Response
     */
    public function edit(resepsionis $resepsionis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\resepsionis  $resepsionis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resepsionis $resepsionis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\resepsionis  $resepsionis
     * @return \Illuminate\Http\Response
     */
    public function destroy(resepsionis $resepsionis)
    {
        //
    }
}
