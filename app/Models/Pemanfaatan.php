<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemanfaatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'sari', // Field di tabel Pemanfaatan
    ];
}

