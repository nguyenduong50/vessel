<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compass extends Model
{
    use HasFactory;

    // protected $table = 'compass';
    protected $fillable = [
        'vessel_index',
        'compass_type',
        'compass_make_and_model',
        'compass_card_diameter',
        'compass_last_adjustment_date',
    ];
}
