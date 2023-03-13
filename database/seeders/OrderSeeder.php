<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        Order::factory()->create([
            'user_id' => '1',
            'gor_id' => '1',
            'field_id' => '1',
            'jam_mulai' => '09:00',
            'jam_selesai' => '10:00',
            'durasi' => '1 Jam',
            'tanggal_main' => '12/11/2022',
            'subtotal' => '100000',
            'foto_struk' => 'lapangan1.png',
            'status' => 'Waiting...',
        ]);
    }
}
