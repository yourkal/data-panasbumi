<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Geomagnet extends Model
{
    protected $table = 'geomagnet';

    protected $fillable = [
        'informasi',
        'keterangan',
        'sari_geomagnet',
        'image'
    ];
}

