<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import model
use App\Models\Jenis_kegiatan;

class jenisKegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis_kegiatan = Jenis_kegiatan::all();
        return view('admin.JenisKeg.index', [
            'jenis_kegiatan' => $jenis_kegiatan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.JenisKeg.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        ///validasi form input
        $validated = $request->validate([
            'nama' => 'required|max:20',

        ]);
        Jenis_kegiatan::create($validated);
        return redirect('dashboard/jenisKeg');
    }



    /**
     * Display the specified resource.
     *
     *
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit($id)
    {
        // mencari data berdasarkan ID
        $jenis_kegiatan = Jenis_kegiatan::find($id);
        return view('admin.jenisKeg.edit', [
            'jenis_kegiatan' => $jenis_kegiatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * 
     *
     */
    public function update(Request $request, string $id)
    {
        // mencari data berdasarkan ID
        $jenis_kegiatan = Jenis_kegiatan::find($id);
        $validated = $request->validate([
            'nama' => 'required|max:20',

        ]);

        //update
        $jenis_kegiatan->update($validated);
        return redirect('/dashboard/jenisKeg')->with('success', 'Data Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy(string $id)
    {
        // mencari data berdasarkan ID
        $jenis_kegiatan = Jenis_kegiatan::find($id);
        $jenis_kegiatan->delete();
        return redirect('dashboard/jenisKeg');
    }
}
