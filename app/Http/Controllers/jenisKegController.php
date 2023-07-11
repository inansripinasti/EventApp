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
            'id' => 'required|min:1|max:20',
            'nama' => 'required|max:20',

        ]);
        Jenis_kegiatan::create($validated);
        return redirect('dashboard/jenisKeg');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($id)
    {
        // mencari data berdasarkan ID
        $jenis_kegiatan = Jenis_kegiatan::find($id);
        return view('admin.jenisKeg.show', [
            'jenis_kegiatan' => $jenis_kegiatan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     */
    public function update(Request $request, string $id)
    {
        // mencari data berdasarkan ID
        $jenis_kegiatan = Jenis_kegiatan::find($id);
        $validated = $request->validate([
            'id' => 'required|min:1|max:20',
            'nama' => 'required|max:20',

        ]);

        //update
        $jenis_kegiatan->update($validated);
        return redirect('/dashboard/jenisKeg');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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
