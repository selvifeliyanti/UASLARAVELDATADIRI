<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengalaman = Pengalaman::all();
        return view('pengalaman.index', compact('pengalaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengalaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengalaman::create($request->all());
        return redirect('pengalaman')->with('msg','Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $pengalaman = Pengalaman::all();
        return view('history.show', compact('pengalaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $pengalaman= Pengalaman::where('asal_sd', $asal_sd)->first();
        return view ('pengalaman.edit', ['pengalaman' => $pengalaman]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'nama_lengkap' => 'required',
            'ttl' => 'required',
            'tentang_saya' => 'required',
        ]);

        $H = History::find($id)->update([
            'id' => $request->id,
            'nama_lengkap' => $request->nama_lengkap,
            'ttl'=> $request->ttl,
            'tentang_saya' =>$request->tentang_saya,

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengalaman::find($id)->delete();
        return redirect ('/');
    }
}