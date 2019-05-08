<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Lowongan;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lowongans = Lowongan::all();

        return view('lowongan/index', compact('lowongans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('lowongan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lowongan' => 'required|max:255',
            'skill' => 'required|max:255',
            'job_desc' => 'required|max:255',
            'status' => 'required|max:255|numeric'
        ]);
        $lowongan = Lowongan::create($validatedData);

         return redirect('/lowongan')->with('success', 'Lowongan is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $lowongan = Lowongan::findOrFail($id);

        return view('lowongan/edit', compact('lowongan'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $lowongan = Lowongans::findOrFail($id);
        $lowongan->delete();
        return redirect('/lowongan')->with('success', 'Lowongan is successfully deleted');
    }
}
