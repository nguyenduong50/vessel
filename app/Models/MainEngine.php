<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainEngine extends Model
{
    use HasFactory;

    // protected $table = 'main_engines';

    protected $fillable = [
        'vessel_index',
        'main_engine_me_no',
        'main_engine_make_and_model',
        'main_engine_serial_no',
        'main_engine_max_power',
        'main_engine_rpm',
    ];
}
