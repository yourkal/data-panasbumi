<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemPanasBumi extends Model
{
    use HasFactory;

    protected $fillable = [
        'batuan_reservoir', 'batuan_penudung', 'sumber_panas', 'sari', 'image'
    ];
}

