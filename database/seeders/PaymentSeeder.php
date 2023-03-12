<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        Payment::factory()->create([
            'user_id' => '1',
            'gor_id' => '1',
            'field_id' => '1',
            'jam_mulai' => '09:00',
            'durasi' => '1 Jam',
            'tanggal_main' => '2022/08/01',
            'subtotal' => '100000',
            'foto_struk' => 'lapangan1.png',
            'status' => 'Waiting...',
        ]);
    }
}
