<?php

namespace App\Http\Controllers;

use App\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->validate([
            'tglcekin' => 'required|date|after_or_equal:today',
            'tglcekout' => 'required|date|after:tgl_cekin',
            'jml_kmr' => 'required',
            'nm_pemesan' => 'required',
            'nm_tamu' => 'required',
            'tipe_kmr' => 'required',
            'email' => 'required',
            'notlp' => 'required',
            
        ]);
        $awal = DB::table('kamar')->where('tipe_kamar', $request->tipe_kmr)->value('jml_kamar');

        $akhir = $awal - $request->jml_kmr;
        // dd($akhir);

            Pesan::create([
                'tglcekin' => $request->tglcekin,
                'tglcekout' => $request->tglcekout,
                'nm_pemesan' => $request->nm_pemesan,
                'nm_tamu' => $request->nm_tamu,
                'jml_kmr' => $request->jml_kmr,
                'email' => $request->email,
                'notlp' => $request->notlp,
                'tipe_kmr' => $request->tipe_kmr,
               'status' => 'checkin'

            ]);

            DB::table('kamar')->where('tipe_kamar',  $request->tipe_kmr)->update([
                'jml_kamar' => $akhir,
            ]);


            return redirect()->route('beranda')->with('success','Data berhasil di input');
    }

}
