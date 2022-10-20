<?php

namespace Database\Seeders;

use App\Models\County;
use App\Models\SubCounty;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CountiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $handle = fopen(public_path("assets/counties.json"), 'r');
        $data = fread($handle, filesize(public_path("assets/counties.json")));
        $counties = json_decode($data, true);

        foreach ($counties as $county) {
            County::create([
                'name' => $county['name'],
                'code' => $county['code'],
                'capital' => $county['capital'],
            ]);
            $subCounties = $county['sub_counties'];
            foreach ($subCounties as $subCounty) {
                SubCounty::create([
                    'name' => $subCounty,
                    'county_code' => $county['code']
                ]);
            }
        }

    }
}
