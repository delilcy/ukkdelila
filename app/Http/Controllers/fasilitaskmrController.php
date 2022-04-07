<?php

namespace App\Http\Controllers;

use App\fasilitaskmr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;


class fasilitaskmrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitaskmr = fasilitaskmr::latest()->paginate(5);
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
            'gambar' => 'required',
        ]);
        $image = $request->file('gambar');
        $nameImage = $request->file('gambar')->getClientOriginalName();
    
        $thumbImage = Image::make($image->getRealPath())->resize(100, 100);
        $thumbPath = public_path() . '/fasilitaskmr/' . $nameImage;
        $thumbImage = Image::make($thumbImage)->save($thumbPath);
    
        $oriPath = public_path() . '/fasilitaskmr2/' . $nameImage;
        $oriImage = Image::make($image)->save($oriPath);
        fasilitaskmr ::create([
            'nm_faskmr' => $request->nm_faskmr,
            'tipekamar' => $request->tipekamar,
            'gambar' => $nameImage,
        ]);
        return redirect()->route('faskamar.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fasilitaskmr  $fasilitaskmr
     * @return \Illuminate\Http\Response
     */
    public function show($faskamar)
    {
        $fasilitaskmr=DB::table('fasilitaskmr')
        ->where('id_faskmr', $faskamar)
        ->get();
        // dd($fasilitaskmr);
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
        if ($request->gambar != null ) {
            $image = $request->file('gambar');
            $nameImage = $request->file('gambar')->getClientOriginalName();
        
            $thumbImage = Image::make($image->getRealPath())->resize(100, 100);
            $thumbPath = public_path() . '/fasilitaskmr/' . $nameImage;
            $thumbImage = Image::make($thumbImage)->save($thumbPath);
            
            $ubahImage = Image::make($image->getRealPath())->resize(3000, 2000);
            $oriPath = public_path() . '/fasilitaskmr2/' . $nameImage;
            $oriImage = Image::make($ubahImage)->save($oriPath);

            $update = DB::table('fasilitaskmr')
            ->where('id_faskmr', $request->id_faskmr)
            ->update([
                'nm_faskmr' => $request->nm_faskmr,
                'tipekamar' => $request->tipekamar,
                'gambar' => $nameImage,
            ]);

            return redirect()->route('faskamar.index')->with('success','Data berhasil di update');
        }
        
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
