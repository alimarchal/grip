<?php

namespace Database\Seeders;

use App\Models\GrievanceDropDown;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrievanceDropDownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $grievanceTypes = [
            'Promotion',
            'Harassment',
            'Unjust handling of employee affairs',
            'Appraisal',
            'Salaries and Allowance',
            'Other (case to case basis)'
        ];

        foreach ($grievanceTypes as $type) {
            GrievanceDropDown::create(['name' => ucwords($type)]);
        }
    }
}
