<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_peserta extends Model
{
    use HasFactory;
    protected $table = 'kategori_peserta';
    protected $fillable = ['nama'];
    // public $timestamps = false;
}
