<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pyrotechnics extends Model
{
    use HasFactory;

    // protected $table = 'pyrotechnics';
    protected $fillable = [
        'vessel_index',
        'pyrotechnics_type',
        'pyrotechnics_quantity',
        'pyrotechnics_expiry_date',
    ];
}
