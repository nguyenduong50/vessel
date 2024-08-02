<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypePropulsion;

class Propulsion extends Model
{
    use HasFactory;

    // protected $table = 'propulsions';
    protected $fillable = [
        'vessel_index',
        'type_propulsion_id',
        'propeller_make_model',
        'propeller_material',
        'propeller_diameter',
        'shaft_make_model',
        'shaft_material',
        'shaft_diameter',
        'water_jet_make_model',
        'water_jet_serial_no',
        'water_jet_diameter',
        'propulsion_description',
    ];

    public function typePropulsion(){
        return $this->belongsTo(TypePropulsion::class);
    }
}
