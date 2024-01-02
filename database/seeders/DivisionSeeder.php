<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $divisions = [
            ['id' => 1, 'name' => 'Islamic Banking Division', 'short_name' => 'IBD'],
            ['id' => 2, 'name' => 'Operations Division', 'short_name' => 'OPD'],
            ['id' => 3, 'name' => 'Credit Management Division', 'short_name' => 'CMD'],
            ['id' => 4, 'name' => 'Human Resource Management Division', 'short_name' => 'HRD'],
            ['id' => 5, 'name' => 'Special Asset Managt. Division', 'short_name' => 'SAMD'],
            ['id' => 6, 'name' => 'Compliance Division', 'short_name' => 'CD'],
            ['id' => 7, 'name' => 'Treasury Management Division', 'short_name' => 'TMD'],
            ['id' => 8, 'name' => 'Financial Control Division', 'short_name' => 'FCD'],
            ['id' => 9, 'name' => 'Information Technology Division', 'short_name' => 'ITD'],
            ['id' => 10, 'name' => 'Commercial & Retail Banking Division', 'short_name' => 'CRBD'],
            ['id' => 11, 'name' => 'Credit Administration Division', 'short_name' => 'CAD'],
            ['id' => 12, 'name' => 'Risk Management Division', 'short_name' => 'RMD'],
            ['id' => 13, 'name' => 'Audit & Inspection Division', 'short_name' => 'AID']
        ];

        foreach ($divisions as $division) {
            Division::create($division);
        }
    }
}
