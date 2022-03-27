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
        // dd($faskmr, $fashotel);
        return view('beranda', compact('faskmr', 'fashotel'));
        
    }
}
