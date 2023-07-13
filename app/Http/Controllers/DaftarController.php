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

        return view('admin.daftar.create', [
            'kegiatan' => $kegiatan,
            'kategori_peserta' => $kategori_peserta
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jenis_kegiatan_options = Kegiatan::pluck('judul')->toArray();
        $kategori_peserta_options = Kategori_peserta::pluck('nama')->toArray();
        // validasi form
        $validated = $request->validate([
            'tgl_daftar' => 'required',
            'alasan' => 'required',
            'nama_peserta' => 'required',
            'nama_kegiatan' => 'required'| 'in:' . implode(',', $jenis_kegiatan_options),
            'kategori_peserta' => 'required'| 'in:' . implode(',', $kategori_peserta_options),

        ]);
        // 
        Daftar::create($validated);
        return redirect('/dashboard/daftar/create');
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
