<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnomaliPanasDangkal extends Model
{
    use HasFactory;

    protected $fillable = [
        'informasi', 'keterangan', 'sari_anomali_panas_dangkal', 'image'
    ];
}

