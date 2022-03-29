<?php

namespace App\Http\Controllers;

use App\Pesan;
use Illuminate\Http\Request;

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
        // dd($request);

            Pesan::create([
                'tglcekin' => $request->tglcekin,
                'tglcekout' => $request->tglcekout,
                'jml_kmr' => $request->jml_kmr,
                'nm_pemesan' => $request->nm_pemesan,
                'nm_tamu' => $request->nm_tamu,
                'email' => $request->email,
                'notlp' => $request->notlp,
                'tipe_kmr' => $request->tipe_kmr,
            ]);

            return redirect()->route('beranda')->with('success','Data berhasil di input');
    }

}
