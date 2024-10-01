<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiGeologi extends Model
{
    use HasFactory;

    protected $fillable = [
        'informasi',
        'keterangan',
        'sari_geologi',
        'image',
    ];
}
