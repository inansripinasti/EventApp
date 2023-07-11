<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import model
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('admin.kegiatan.index', [
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kegiatan = Kegiatan::all();
        // return view('admin.kegiatan.create', compact('kegiatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form
        $validated = $request->validate([
            'judul' => 'required',
            'kapasitas' => 'required',
            'harga_tiket' => 'required',
            'tanggal' => 'required',
            'narasumber' => 'required',
            'tempat' => 'required',
            'jenis_kegiatan' => 'required',

        ]);
        // 
        Kegiatan::create($validated);
        return redirect('/dashboard/kegiatan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mencari  data berdasarkan id
        $kegiatan = Kegiatan::find($id);
        return view('admin.kegiatan.show', [
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //mencari data berdasarkan id
        $kegiatan = Kegiatan::find($id);
        return view('admin.kegiatan.edit', [
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //mencari data berdasarkan id
        $kegiatan = Kegiatan::find($id);

        // validasi form
        $validated = $request->validate([
            'judul' => 'required',
            'kapasitas' => 'required',
            'harga_tiket' => 'required',
            'tanggal' => 'required',
            'narasumber' => 'required',
            'tempat' => 'required',
            'jenis_kegiatan' => 'required',

        ]);

        // eksekusi update data
        $kegiatan->update($validated);
        return redirect('/dashboard/kegiatan')->with('success','Data Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // mencari data berdasarkan id
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        return redirect('/dashboard/kegiatan');
    }


}
