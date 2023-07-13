<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import model
use App\Models\Kategori_peserta;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_peserta = Kategori_peserta::all();
        return view('admin.kategori.index', [
            'kategori_peserta' => $kategori_peserta
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form
        $validated = $request->validate([
            'nama' => 'required',
        ]);
        
        Kategori_peserta::create($validated);
        return redirect('/dashboard/kategori/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mencari  data berdasarkan id
        $kategori_peserta = Kategori_peserta::find($id);
        return view('admin.kategori.edit', [
            'kategori_peserta' => $kategori_peserta
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //mencari data berdasarkan id
        $kategori_peserta = Kategori_peserta::find($id);

        // validasi form
        $validated = $request->validate([
            'nama' => 'required',

        ]);

        // eksekusi update data
        $kategori_peserta->update($validated);
        return redirect('/dashboard/kategori')->with('success', 'Data Berhasil di Perbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // mencari data berdasarkan id
        $kategori_peserta = Kategori_peserta::find($id);
        $kategori_peserta->delete();
        return redirect('/dashboard/kategori');
    }
}
