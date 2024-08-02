<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LifeBuoys extends Model
{
    use HasFactory;

    // protected $table = 'life_buoys';
    protected $fillable = [
        'vessel_index',
        'life_buoys_quantity',
        'life_buoys_attachment',
        'life_buoys_expiry_date',
    ];
}
