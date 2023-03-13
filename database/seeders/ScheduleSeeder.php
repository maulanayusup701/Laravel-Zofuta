<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        Schedule::factory()->create([
            'gor_id' => '1',
            'field_id' => '1',
            'user_id' => '3',
            'order_id' => '1',
            'status' => 'Booked',
            // 'waktu' => '12-12-2022',
            // 'tanggal' => '12-12-2022',
        ]);
    }
}
