<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    public function index()
    {
        $faskmr=DB::table('fasilitaskmr')->get();
        $fashotel=DB::table('fasilitashotel')->get();
        
        return view('halaman', compact('faskmr', 'fashotel'));
    }
}
