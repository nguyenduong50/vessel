<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireEquipment extends Model
{
    use HasFactory;

    // protected $table = 'fire_equipment';
    protected $fillable = [
        'vessel_index',
        'fire_equipment_type',
        'fire_equipment_make_and_model',
        'fire_equipment_capacity',
        'fire_equipment_quantity',
        'fire_equipment_expiry_date'
    ];
}
