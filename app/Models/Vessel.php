<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Vessel extends Model
{
    use HasFactory;
    
    // protected $table = 'vessels';
    protected $fillable = [
            //General
            'name',
            'vessel_id', 
            'amsa_uvi',
            'trailer_reg_no',
            'home_port',
            'builder',
            'build_year',
            'builders_plate_no',
            'survey_class',
            'survey_authority',
            'description',
            'note',
            'no_of_crew',
            'no_of_pax',
            'no_of_berthed',
            'no_of_unberthed_pax',
            'cos_expiry_date',
            'survey_anniversary_date',
            'class_cert_expiry_date',
            'coo_expiry_date',
            'trailer_reg_expiry_date',
            'rcd_test_expiry_date',
            'megger_test_expiry_date',
            'ecoc_expiry_date',
            'gas_coc_expiry_date',
            'work_order_no',
            //Owner
            'company_id',
            'captain',
            'phone_captain',
            'mobile_captain',
            'email_captain',
            'line_manager',
            'phone_line_manager',
            'mobile_line_manager',
            'email_line_manager',
            //Hull and Dimension
            'hull_type',
            'hull_material',
            'make_and_model',
            'loa',
            'measured_length',
            'breadth',
            'depth',
            'draft',
            'full_load_displacement',
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
