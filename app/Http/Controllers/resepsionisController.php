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
        $reservasi = reservasi::latest()->paginate(5);
        $halaman = reservasi::latest()->paginate(5)->currentPage();
        return view('reservasi.index', compact('reservasi', 'halaman'));
    }

    public function checkin($id_reservasi)
    {
        $change = DB::table('reservasi')->where('id_reservasi', $id_reservasi)->update([ 'status' => 'checkout' ]);
        return redirect()->route('reservasi.index')->with('success','Pesanan berhasil Check In!');
    }

    public function checkout($id_reservasi)
    {
        $change = DB::table('reservasi')->where('id_reservasi', $id_reservasi)->update([ 'status' => 'done' ]);
        return redirect()->route('reservasi.index')->with('success','Pesanan berhasil Check Out!');
    }

    public function cancel($id_reservasi)
    {
        $change = DB::table('reservasi')->where('id_reservasi', $id_reservasi)->update([ 'status' => 'cancel' ]);
        return redirect()->route('reservasi.index')->with('success','Pesanan berhasil Check In!');
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
