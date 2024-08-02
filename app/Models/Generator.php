<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generator extends Model
{
    use HasFactory;

    // protected $table = 'generator';
    protected $fillable = [
        'vessel_index',
        'generator_no',
        'generator_make_and_model',
        'generator_serial_no',
        'generator_ac_dc',
        'generator_kva',
        'generator_volts',
        'generator_phase',
        'generator_frequency',
        'generator_driven_by',
    ];
}
