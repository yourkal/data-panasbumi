<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUmum extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_laporan',
        'judul_laporan',
        'instansi_pelapor',
        'penulis_laporan',
        'sumber_data',
    ];
    
}
