<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FieldSeeder extends Seeder
{
    public function run(): void
    {
        Field::factory()->create([
            'gor_id' => '1',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan1.png',
        ]);
        Field::factory()->create([
            'gor_id' => '1',
            'nama_lapangan' => 'Lapangan 2',
            'slug_lapangan' => 'lapangan-2',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'lapangan2.png',
        ]);
    }
}
