<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiLembarPeta extends Model
{
    use HasFactory;

    protected $fillable = [
        'peta_topografi',
        'peta_geologi',
        'citra',
    ];
}

