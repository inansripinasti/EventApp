<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import model
use App\Models\Daftar;


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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form
        $validated = $request->validate([
            'tgl_daftar' => 'required',
            'alasan' => 'required',
            'nama_peserta' => 'required',
            'nama_kegiatan' => 'required',
            'kategori_peserta' => 'required',

        ]);
        // 
        Daftar::create($validated);
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
