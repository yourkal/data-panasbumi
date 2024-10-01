<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPemutakhiran extends Model
{
    use HasFactory;

    protected $fillable = [
        'status', 'pengisi', 'tanggal', 'verifikator' // Field di tabel Informasi Pemutakhiran
    ];
}
