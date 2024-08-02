<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EPIRP extends Model
{
    use HasFactory;

    // protected $table = 'epirp';
    protected $fillable = [
        'vessel_index',
        'epirp_type',
        'epirp_make_and_model',
        'epirp_serial_no',
        'epirp_battery_expiry_date',
        'epirp_asma_expiry_date'
    ];
}
