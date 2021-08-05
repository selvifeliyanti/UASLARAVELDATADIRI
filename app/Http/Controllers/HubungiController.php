<?php

namespace App\Http\Controllers;

use App\Models\Hubungi;
use Illuminate\Http\Request;

class HubungiController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hubungi = Hubungi::all();
        return view('hubungi.index', compact('hubungi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hubungi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hubungi::create($request->all());
        return redirect('hubungi')->with('msg','Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $hubungi = Hubungi::all();
        return view('hubungi.show', compact('hubungi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $hubungi= Hubungi::where('asal_sd', $asal_sd)->first();
        return view ('hubungi.edit', ['hubungi' => $hubungi]);
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
            'no_tlp' => 'required',
            'email' => 'required',
            'ig' => 'required',
            'fb' =>'required',
        ]);

        $H = Hubungi::find($id)->update([
            'id' => $request->id,
            'no_tlp' => $request->no_tlp,
            'email'=> $request->email,
            'ig' =>$request->ig,
            'fb' => $request->fb,

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
        Hubungi::find($id)->delete();
        return redirect ('/');
    }
}