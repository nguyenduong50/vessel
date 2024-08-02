<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'Admin',
            'status' => '1',
            'description' => 'Admin',
        ]);
        Company::create([
            'name' => 'RMO',
            'status' => '1',
            'description' => 'description test company',
        ]);
        Company::create([
            'name' => 'Vimaru',
            'status' => '1',
            'description' => 'description test company',
        ]);
        Company::create([
            'name' => 'Vinaco',
            'status' => '0',
            'description' => 'description test company',
        ]);
        Company::create([
            'name' => 'Vina Ship',
            'status' => '1',
            'description' => 'description test company',
        ]);
        Company::create([
            'name' => 'BBT',
            'status' => '0',
            'description' => 'description test company',
        ]);
        Company::create([
            'name' => 'Pina Ship',
            'status' => '1',
            'description' => 'description test company',
        ]);
    }
}
