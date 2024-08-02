<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liferafts extends Model
{
    use HasFactory;

    // protected $table = 'liferafts';
    protected $fillable = [
        'vessel_index',
        'liferafts_no',
        'liferafts_make_and_model',
        'liferafts_type',
        'liferafts_no_of_persons',
        'liferafts_serial_no',
        'liferafts_expiry_date',
        'liferafts_hydrostatic',
        'liferafts_hydrostatic_serial_no',
        'liferafts_hydrostatic_serial_expiry',
    ];
}
