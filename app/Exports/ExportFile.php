<?php

namespace App\Exports;

use App\Models\Vessel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Carbon\Carbon;

class ExportFile implements FromCollection,WithHeadings,WithMapping,WithStyles,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Vessel::where('company_id', auth()->user()->company_id)->orderBy('cos_expiry_date', 'ASC')->get();
    }

    public function headings(): array {
        return [
            'Name',
            'AMSA UVI',
            'Company',    
            "Cos Expiry Date",
            "Coo Expiry Date",
            "Equipment Status"
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:Z99')->getFont()->setSize(14)->setName('Times New Roman');
        return [
            1    => ['font' => ['bold' => true]],
         ];
    }
 
    public function map($vessel): array {

        $now = now('Asia/Ho_Chi_Minh');
        $equipmentStatus = "Current";
        if(
            $vessel->class_cert_expiry_date <= $now || 
            $vessel->trailer_reg_expiry_date <= $now || 
            $vessel->rcd_test_expiry_date <= $now || 
            $vessel->megger_test_expiry_date <= $now || 
            $vessel->ecoc_expiry_date <= $now || 
            $vessel->gas_coc_expiry_date <= $now
        ){
            $equipmentStatus = "Out of date";
        }elseif(
            $vessel->class_cert_expiry_date > $now && $vessel->class_cert_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) || 
            $vessel->trailer_reg_expiry_date > $now && $vessel->trailer_reg_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) || 
            $vessel->rcd_test_expiry_date > $now && $vessel->rcd_test_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) || 
            $vessel->megger_test_expiry_date > $now && $vessel->megger_test_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) || 
            $vessel->ecoc_expiry_date > $now && $vessel->ecoc_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) || 
            $vessel->gas_coc_expiry_date > $now && $vessel->gas_coc_expiry_date <= date('Y-m-d', strtotime($now. '+90days'))
        ){
            $equipmentStatus = "Duc soon";
        }else{
            $equipmentStatus = "Current";
        }

        return [
            $vessel->name,
            $vessel->amsa_uvi,
            $vessel->company->name,
            $vessel->cos_expiry_date,
            $vessel->coo_expiry_date,
            $equipmentStatus
        ];
    }
}
