<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = History::all();
        return view('history.index', compact('history'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('history.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        History::create($request->all());
        return redirect('history')->with('msg','Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $history = History::all();
        return view('history.show', compact('history'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $history= History::where('asal_sd', $asal_sd)->first();
        return view ('history.edit', ['history' => $history]);
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
            'asal_sd' => 'required',
            'asal_smp' => 'required',
            'asal_smk' => 'required',
            'asal_univ' =>'required',
        ]);

        $H = History::find($id)->update([
            'id' => $request->id,
            'asal_sd' => $request->asal_sd,
            'asal_smp'=> $request->asal_smp,
            'asal_smk' =>$request->asal_smk,
            'asal_univ' => $request->asal_univ,

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
        History::find($id)->delete();
        return redirect ('/');
    }
}