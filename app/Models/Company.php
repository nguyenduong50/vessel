<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vessel;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'description',
        'represent',
        'represent_email',
        'represent_phone',
        'company_address',
        'company_website',
        'company_phone', 
    ];

    public function vessel(){
        return $this->hasMany(Vessel::class);
    }
}
