<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;

class TentangController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tentang = Tentang::all();
        return view('tentang.index', compact('tentang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tentang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tentang::create($request->all());
        return redirect('tentang')->with('msg','Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tentang = Tentang::all();
        return view('tentang.show', compact('tentang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $tentang= Tentang::where('tentang', $alamat)->first();
        return view ('tentang.edit', ['tentang' => $tentang]);
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
            'nama_admin' => 'required|unique:table_anggota|max:255',
             'alamat' => 'required',
             'no_telp' =>'required|numeric',
             'email' => 'required',

        ]);

        $M = Tentang::find($id)->update([
            'id' => $request->id,
            'nama_admin' => $request->nama_admin,
            'alamat'=> $request->alamat,
            'no_telp' => $request->no_telp,
            'email' =>$request->email,

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
        tentang::find($id)->delete();
        return redirect ('/');
    }
}