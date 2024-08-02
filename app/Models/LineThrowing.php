<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineThrowing extends Model
{
    use HasFactory;

    // protected $table = 'line_throwing';
    protected $fillable = [
        'vessel_index',
        'line_throwing_apparatus_type',
        'line_throwing_apparatus_quantity',
        'line_throwing_apparatus_expiry_date',
    ];    
}
