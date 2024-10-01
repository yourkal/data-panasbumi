<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPengeboran extends Model
{
    use HasFactory;

    protected $fillable = [
        'informasi', 'keterangan', 'representatif_sumur', 'sari', 'image'
    ];
}

