<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Polyclinic;

class PolyclinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $polyclinics = [
            'КГБУЗ «Городская поликлиника № 1, г. Барнаул»',
            'КГБУЗ «Городская поликлиника № 3, г. Барнаул»',
            'КГБУЗ «Городская поликлиника № 7, г. Барнаул»',
            'КГБУЗ «Городская поликлиника № 9, г. Барнаул»',
            'КГБУЗ «Городская поликлиника № 9, г. Барнаул»',
            'КГБУЗ «Городская поликлиника № 10, г. Барнаул»'
        ];

        foreach ($polyclinics as $polyclinic) {
            Polyclinic::factory()->create([
                'name' => $polyclinic,
            ]);
        }
    }
}
