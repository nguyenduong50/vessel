<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuxiliaryEngine extends Model
{
    use HasFactory;

    // protected $table = 'auxiliary_engine';
    protected $fillable = [
        'vessel_index',
        'aux_no',
        'aux_make_and_model',
        'aux_serial_no',
        'aux_max_power',
        'aux_rpm',
        'aux_location',
        'aux_use',
    ];
}
