<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypePropulsion;

class TypePropulsionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypePropulsion::create([
            'name' => 'Shaft',
            'status' => '1',
            'description' => 'description test vessel propulsion',
        ]);
        TypePropulsion::create([
            'name' => 'Water jet',
            'status' => '1',
            'description' => 'description test vessel propulsion',
        ]);
        TypePropulsion::create([
            'name' => 'Out board',
            'status' => '1',
            'description' => 'description test vessel propulsion',
        ]);
        TypePropulsion::create([
            'name' => 'None',
            'status' => '1',
            'description' => 'description test vessel propulsion',
        ]);
        TypePropulsion::create([
            'name' => 'Others',
            'status' => '1',
            'description' => 'description test vessel propulsion',
        ]);
    }
}
