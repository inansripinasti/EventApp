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
        //
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
        return redirect('/dashboard/daftar');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
