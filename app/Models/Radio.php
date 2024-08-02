<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    use HasFactory;

    // protected $table = 'radios';
    protected $fillable = [
        'vessel_index', 
        'radio_type',
        'radio_make_and_model',
        'radio_quantity',
        'radio_last_check_date'
    ];
}
