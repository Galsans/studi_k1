<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Kelas::create($input);
        return redirect()->route('kelas.index')->with('status', 'Data Kelas Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kelas $kelas, $id)
    {
        //
        $kelas = Kelas::find($id);
        return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelas $kelas, $id)
    {
        //
        $request->validate([
            'kelas'=>'required',
            'kelas'=>'required'
        ]);

        $kelas = Kelas::find($id);
        $kelas->kelas = $request->input('kelas');
        $kelas->dkr = $request->input('dkr');
        $kelas->save();
        return redirect()->route('kelas.index')->with('status', 'Data Kelas Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kelas $kelas, $id)
    {
        //
        Kelas::find($id)->delete();
        return redierect()->back()->with('status', 'Data Kelas Berhasil Di Hapus');
    }
}
