<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiGeokimia extends Model
{
    use HasFactory;

    protected $fillable = [
        'parameter',
        'nilai',
        'satuan',
        'lokasi',
    ];
}

