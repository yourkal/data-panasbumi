<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GayaBerat extends Model
{
    protected $table = 'gaya_berat';

    protected $fillable = [
        'informasi',
        'keterangan',
        'sari_gaya_berat',
        'image'
    ];
}

