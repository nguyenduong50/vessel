<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gearbox extends Model
{
    use HasFactory;

    // protected $table = 'gearbox';
    protected $fillable = [
        'vessel_index', 
        'gearbox_no',
        'gearbox_make_and_model',
        'gearbox_serial_no',
        'gearbox_reduction_ratio',
        'gearbox_use',
    ];
}
