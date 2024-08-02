<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Propulsion;

class TypePropulsion extends Model
{
    use HasFactory;

    public function propulsion(){
        return $this->hasMany(Propulsion::class);
    }
}
