<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audiomagnetotelurik extends Model
{
    use HasFactory;

    protected $fillable = [
        'informasi', 'keterangan', 'sari_audiomagnetotelurik', 'image'
    ];
}

