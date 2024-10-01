<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiWilayah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_daerah',
        'nomor_daerah',
        'pulau',
        'provinsi',
        'posisi_lintang',
        'posisi_bujur',
        'temperatur_manifestasi',
        'geotermometer',
        'top_reservoir',
        'sumber_daya_spekulatif',
        'sumber_daya_hipotetis',
        'cadangan_mungkin',
        'cadangan_terduga',
        'cadangan_terbukti',
    ];
}
