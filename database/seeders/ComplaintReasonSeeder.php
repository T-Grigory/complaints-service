<?php

namespace Database\Seeders;

use App\Models\ComplaintReason;
use Illuminate\Database\Seeder;

class ComplaintReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reasons = [
            'Опоздание',
            'Оскорбление',
            'Нарушение врачебной тайны',
            'Неоказание мед. помощи',
            'Диагноз установлен неверно',
            'Отказ в приеме',
            'Навязывание услуг, предоставляемых за деньги'
        ];

        foreach ($reasons as $reason) {
            ComplaintReason::factory()->create([
                'name' => $reason,
            ]);
        }
    }
}
