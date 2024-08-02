<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breathing extends Model
{
    use HasFactory;

    // protected $table = 'breathing';
    protected $fillable = [
        'vessel_index',
        'breathing_apparatus_type',
        'breathing_apparatus_quantity',
        'breathing_apparatus_expiry_date',
    ];
}
