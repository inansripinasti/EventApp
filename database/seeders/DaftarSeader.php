<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//import model daftar
use App\Models\Daftar;


class DaftarSeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // membuat data pendaftaran dummy
        Daftar::create([
            'tgl_daftar' => '2023-07-13',
            'alasan' => 'tertarik ikut',
            'nama_peserta' => 'dini',
            'nama_kegiatan' => 'seminar',
            'kategori_peserta' => 'member',
        ]);
    }
}
