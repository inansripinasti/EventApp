<?php

namespace Database\Seeders;

use App\Models\Jenis_kegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Jenis_kegiatanSeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // membuat data pendaftaran dummy
        Jenis_kegiatan::create([
            'nama' => 'acara',
        ]);
    }
}
