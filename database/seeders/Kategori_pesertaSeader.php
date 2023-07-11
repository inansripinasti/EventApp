<?php

namespace Database\Seeders;
// import model book
use App\Models\Kategori_peserta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Kategori_pesertaSeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // membuat data pendaftaran dummy
        Kategori_peserta::create([
            'nama' => 'member',
        ]);
    }
}
