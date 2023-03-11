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
            'user_id' => '1',
            'payment_id' => '1',
            'status' => 'Booked',
            'waktu' => '2022-11-12',
            'tanggal' => '2022-11-12',
        ]);
        Schedule::factory()->create([
            'gor_id' => '1',
            'field_id' => '2',
            'user_id' => '2',
            'payment_id' => '2',
            'status' => 'Booked',
            'waktu' => '2022-11-12',
            'tanggal' => '2022-11-12',
        ]);
    }
}
