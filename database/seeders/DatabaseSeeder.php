<?php

namespace Database\Seeders;

use App\Models\ComplaintReason;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            ComplaintReason::class,
            PolyclinicSeeder::class,
        ]);
    }
}
