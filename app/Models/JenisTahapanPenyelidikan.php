<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisTahapanPenyelidikan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahap_penyelidikan',
        'metode_penyelidikan',
    ];
}

