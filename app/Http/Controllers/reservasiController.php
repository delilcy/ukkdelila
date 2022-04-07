<?php

namespace App\Http\Controllers;

use App\reservasi;
use DB;
use Illuminate\Http\Request;

class reservasiController extends Controller
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
        return view('reservasi.index',compact('reservasi', 'halaman'));
    }

    public function search(Request $request)
    {
        $reservasi=  DB::table('reservasi')->where('nm_tamu', $request->nm_tamu )->paginate(5);
        return view('reservasi.index', compact('reservasi'));
    }
    
    public function filter(Request $request)
    {
        $reservasi=  DB::table('reservasi')->where('tglcekin', $request->tglcekin )->paginate(5);
        return view('reservasi.index', compact('reservasi'));
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'tglcekin' => 'required',
            'tglcekout' => 'required',
            'jml_kmr' => 'required',
            'nm_pemesan' => 'required',
            'nm_tamu' => 'required',
            'tipe_kamar' => 'required',
            'email' => 'required',
            'notlp' => 'required',
            
            ]);
            // reservasi::create($request->all());
            dd($request);
    return redirect()->route('reservasi.index')->with('success','Data berhasil di input');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function show(reservasi $reservasi)
    {
        return view('reservasi.show',compact('reservasi'));
    }
    public function pesan()
    {
        $pesan = DB::table('reservasi')->where('email', auth()->user()->email)->get();
        // dd($pesan);
        return view('reservasi.pesan',compact('pesan'));
    }
    public function cetak(Request $request)
    {
        $cetak = DB::table('reservasi')->where('id_reservasi', $request->id_reservasi)->get();
        // dd($cetak);
        return view('reservasi.cetak', compact('cetak'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function edit(reservasi $reservasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservasi $reservasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $reservasi)
    {
        // dd($reservasi);
        $awal = DB::table('reservasi')->where('id_reservasi', $reservasi)->value('jml_kmr');
        $tipe = DB::table('reservasi')->where('id_reservasi', $reservasi)->value('tipe_kmr');
        $alfa = DB::table('kamar')->where('tipe_kamar', $tipe)->value('jml_kamar');
        $akhir = $awal + $alfa;
        DB::table('kamar')->where('tipe_kamar',  $tipe)->update([
            'jml_kamar' => $akhir,
        ]);
        $hapus = DB::table('reservasi')->where('id_reservasi', $reservasi)->delete();
        return redirect()->route('reservasi.index');
    }
}
