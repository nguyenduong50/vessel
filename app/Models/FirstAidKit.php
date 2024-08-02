<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstAidKit extends Model
{
    use HasFactory;

    // protected $table = 'first_aid_kit'; 
    protected $fillable = [
        'vessel_index',
        'first_aid_kit_type',
        'first_aid_kit_quantity',
        'first_aid_kit_expiry_date',
    ];
}
