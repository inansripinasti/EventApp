<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $table = 'daftar';
    protected $fillable = ['tgl_daftar','alasan','nama_peserta','nama_kegiatan','kategori_peserta'];
    // public $timestamps = false;
}
