<?php

namespace App\Http\Controllers;

use App\fasilitashotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class fasilitashotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitashotel = fasilitashotel::latest()->paginate(5);
        return view('fashotel.index',compact('fasilitashotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fashotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nm_fashotel' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required',
        ]);
        $image = $request->file('gambar');
        $nameImage = $request->file('gambar')->getClientOriginalName();
    
        $thumbImage = Image::make($image->getRealPath())->resize(100, 100);
        $thumbPath = public_path() . '/fasilitashotel/' . $nameImage;
        $thumbImage = Image::make($thumbImage)->save($thumbPath);
        
        $ubahImage = Image::make($image->getRealPath())->resize(3000, 2000);
        $oriPath = public_path() . '/fasilitashotel2/' . $nameImage;
        $oriImage = Image::make($ubahImage)->save($oriPath);

        fasilitashotel::create([
            'nm_fashotel' => $request->nm_fashotel,
            'keterangan' => $request->keterangan,
            'gambar' => $nameImage,
        ]);
        return redirect()->route('fashotel.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fasilitashotel  $fasilitashotel
     * @return \Illuminate\Http\Response
     */
    public function show( $fashotel)
    {
        $fasilitashotel=DB::table('fasilitashotel')
        ->where('id_fashotel', $fashotel)
        ->get();
        // dd($fasilitashotel);
        return view('fashotel.show',compact('fasilitashotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fasilitashotel  $fasilitashotel
     * @return \Illuminate\Http\Response
     */
    public function edit($fasilitashotel)
    {
        // dd($fasilitashotel);
        $fasilitashotel = DB::table('fasilitashotel')->where('id_fashotel', $fasilitashotel)->get();
        // dd($fasilitashotel);
        return view('fashotel.edit', compact('fasilitashotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fasilitashotel  $fasilitashotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fasilitashotel $fasilitashotel)
    {
        $request->validate([
            'nm_fashotel' => 'required',
            'keterangan' => 'required',
            
        ]);
        // dd($request->id_fashotel);
        if ($request->gambar != null ) {
            $image = $request->file('gambar');
            $nameImage = $request->file('gambar')->getClientOriginalName();
        
            $thumbImage = Image::make($image->getRealPath())->resize(100, 100);
            $thumbPath = public_path() . '/fasilitashotel/' . $nameImage;
            $thumbImage = Image::make($thumbImage)->save($thumbPath);
            
            $ubahImage = Image::make($image->getRealPath())->resize(3000, 2000);
            $oriPath = public_path() . '/fasilitashotel2/' . $nameImage;
            $oriImage = Image::make($ubahImage)->save($oriPath);

            $update = DB::table('fasilitashotel')
            ->where('id_fashotel', $request->id_fashotel)
            ->update([
                'nm_fashotel' => $request->nm_fashotel,
                'keterangan' => $request->keterangan,
                'gambar' => $nameImage,
            ]);

            return redirect()->route('fashotel.index')->with('success','Data berhasil di update');
        }

        $update = DB::table('fasilitashotel')
              ->where('id_fashotel', $request->id_fashotel)
              ->update([
                  'nm_fashotel' => $request->nm_fashotel,
                  'keterangan' => $request->keterangan,
                  
              ]);
        return redirect()->route('fashotel.index')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fasilitashotel  $fasilitashotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(fasilitashotel $fashotel)
    {
        $fashotel->delete();
        return redirect()->route('fashotel.index')->with('success','Data berhasil dihapus');
    }
}
