<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Kegiatan;

class KegiatanSeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // membuat data pendaftaran dummy
        Kegiatan::create([
            'judul' => 'Digital',
            'kapasitas' => 100,
            'harga_tiket' => 100000,
            'tanggal' => '2023-07-26',
            'narasumber' => 'budi',
            'tempat' => 'Bogor',
            'jenis_kegiatan' => 'Seminar',
        ]);
    }
}
