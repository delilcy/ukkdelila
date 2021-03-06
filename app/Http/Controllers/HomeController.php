<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function beranda()
    {
        
        $faskmr=DB::table('fasilitaskmr')->get();
        $fashotel=DB::table('fasilitashotel')->get();
        $superior = DB::table('kamar')->where('tipe_kamar', 'Superior')->value('jml_kamar');
        $deluxe = DB::table('kamar')->where('tipe_kamar', 'Deluxe')->value('jml_kamar');
        $suite = DB::table('kamar')->where('tipe_kamar', 'Suite Room')->value('jml_kamar');
        // dd($faskmr, $fashotel);
        return view('beranda', compact('faskmr', 'fashotel', 'superior', 'deluxe', 'suite'));
        
    }
    public function halaman()
    {
        
        $faskmr=DB::table('fasilitaskmr')->get();
        $fashotel=DB::table('fasilitashotel')->get();
        
        return view('halaman', compact('faskmr', 'fashotel'));
        
    }
}
