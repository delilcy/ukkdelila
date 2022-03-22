<?php

namespace App\Http\Controllers;

use App\reservasi;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        // $request->validate([
        //     'tglcekin' => 'required',
        //     'tglcekout' => 'required',
        //     'jml_kmr' => 'required',
        //     'nm_pemesan' => 'required',
        //     'nm_tamu' => 'required',
        //     'tipe_kamar' => 'required',
        //     'email' => 'required',
        //     'notlp' => 'required',
            
        //     ]);
            // reservasi::create($request->all());
            dd($request);
            return redirect()->route('beranda')->with('success','Data berhasil di input');
    }

}
