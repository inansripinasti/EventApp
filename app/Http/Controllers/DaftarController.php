<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import model
use App\Models\Daftar;
use App\Models\Kegiatan;
use App\Models\Kategori_peserta;


class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $daftar = Daftar::all();
        return view('admin.daftar.index', [
            'daftar' => $daftar
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_peserta = Kategori_peserta::all();
        $kegiatan = Kegiatan::all();
        return view('admin.daftar.create', compact('kategori_peserta','kegiatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ///validasi form input
        $validated = $request->validate([
            'nama_peserta' => 'required',
            'tgl_daftar' => 'required',
            'alasan' => 'required',
            'nama_kegiatan' => 'required',
            'kategori_peserta' => 'required',

        ]);
        Daftar::create($validated);
        return redirect('dashboard/daftar/create')->with('success', 'Data Terkirim!');
        
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
        // mencari data berdasarkan id
        $daftar = Daftar::find($id);
        $daftar->delete();
        return redirect('/dashboard/daftar');
    }
}
