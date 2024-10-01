<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Geolistrik extends Model
{
    protected $table = 'geolistrik';

    protected $fillable = [
        'informasi',
        'keterangan',
        'sari_geolistrik',
        'image'
    ];
}

