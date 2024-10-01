<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyelidikan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_laporan',
        'penyelidik',
        'tahun',
        'hasil_yang_diselidiki',
    ];
}
