<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LifeJackets extends Model
{
    use HasFactory;

    // protected $table = 'life_jackets';
    protected $fillable = [
        'vessel_index',
        'life_jackets_type',
        'life_jackets_make_and_model',
        'life_jackets_quantity',
        'life_jackets_serial_no',
        'life_jackets_seft_activating_light',
        'life_jackets_seft_activating_light_expiry_date',
    ];
}
