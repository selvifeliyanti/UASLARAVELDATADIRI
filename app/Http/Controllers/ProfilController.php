<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = Profil::all();
        return view('profil.index', compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Profil::create($request->all());
        return redirect('profil')->with('msg','Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $profil = Profil::all();
        return view('profil.show', compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $profil= Profil::where('keterangan', $keterangan)->first();
        return view ('profil.edit', ['profil' => $profil]);
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
            'id' => 'required|unique:absen|max:255',
            'hobby' => 'required',
            'cita_cita' => 'required',
            'visi_misi' => 'required',
            'keterangan' =>'required',
        ]);

        $P = profil::find($id)->update([
            'id' => $request->id,
            'hobby' => $request->hobby,
            'cita_cita'=> $request->cita_cita,
            'visi_misi' =>$request->visi_misi,
            'keterangan' => $request->keterangan,
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
        Profil::find($id)->delete();
        return redirect ('/');
    }
}