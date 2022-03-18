<?php

namespace App\Http\Controllers;

use App\fasilitaskmr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fasilitaskmrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitaskmr = fasilitaskmr::latest()->paginate(10);
        return view('faskamar.index',compact('fasilitaskmr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faskamar.create');
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
            'nm_faskmr' => 'required',
            'tipekamar' => 'required',
        ]);
        fasilitaskmr::create($request->all());
        return redirect()->route('faskamar.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fasilitaskmr  $fasilitaskmr
     * @return \Illuminate\Http\Response
     */
    public function show(fasilitaskmr $fasilitaskmr)
    {
        return view('faskamar.show',compact('fasilitaskmr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fasilitaskmr  $fasilitaskmr
     * @return \Illuminate\Http\Response
     */
    public function edit($fasilitaskmr)
    {
         // dd($fasilitaskmr);
         $fasilitaskmr = DB::table('fasilitaskmr')->where('id_faskmr', $fasilitaskmr)->get();
        //  dd($fasilitaskmr);
         return view('faskamar.edit', compact('fasilitaskmr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fasilitaskmr  $fasilitaskmr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fasilitaskmr $fasilitaskmr)
    {
        $request->validate([
            'nm_faskmr' => 'required',
            'tipekamar' => 'required',
        ]);
        // dd($request->id_faskmr);
        $update = DB::table('fasilitaskmr')
              ->where('id_faskmr', $request->id_faskmr)
              ->update([
                  'nm_faskmr' => $request->nm_faskmr,
                  'tipekamar' => $request->tipekamar,
              ]);
        return redirect()->route('faskamar.index')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fasilitaskmr  $fasilitaskmr
     * @return \Illuminate\Http\Response
     */
    public function destroy(fasilitaskmr $faskamar)
    {
        $faskamar->delete();
        return redirect()->route('faskamar.index')->with('success','Data berhasil dihapus');
    }
}
