<?php

namespace Database\Seeders;

use App\Models\Gor;
use App\Models\Role;
use App\Models\User;
use App\Models\Field;
use App\Models\Payment;
use App\Models\Schedule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'username' => 'developer',
            'firstname' => 'Developer',
            'lastname' => 'Zofuta',
            'password' => Hash::make('developer'),
            'email' => 'dev@gmail.com',
            'notelp' => '083808380838',
            'alamat' => 'Purwakarta',
            'role_id' => '1'
        ]);
        User::factory()->create([
            'username' => 'admin',
            'firstname' => 'Admin',
            'lastname' => 'Lapangan',
            'password' => Hash::make('admin'),
            'email' => 'admin@gmail.com',
            'notelp' => '083808380838',
            'alamat' => 'Purwakarta',
            'role_id' => '2'
        ]);
        User::factory()->create([
            'username' => 'user',
            'firstname' => 'User',
            'lastname' => 'Lapangan',
            'password' => Hash::make('user'),
            'email' => 'user@gmail.com',
            'notelp' => '083808380838',
            'alamat' => 'Purwakarta',
            'role_id' => '3'
        ]);

        //table Roles
        Role::factory()->create([
            'role' => 'Developer',
            'slug-role' => 'depeloper'
        ]);
        Role::factory()->create([
            'role' => 'Admin',
            'slug-role' => 'admin'
        ]);
        Role::factory()->create([
            'role' => 'User',
            'slug-role' => 'user'
        ]);

        //table Gor
        Gor::factory()->create([
            'nama_gor' => 'King Putsal',
            'slug_gor' => 'king-putsal',
            'alamat_gor' => 'Maracang',
            'latitude' => '-',
            'longtitude' => '-',
            'foto_gor' => 'kingputsal.png',
        ]);

        //table field
        Field::factory()->create([
            'id_gor' => '1',
            'nama_lapangan' => 'Lapangan 1',
            'slug_lapangan' => 'lapangan-1',
            'keterangan_lapangan' => 'Rumput Sintetis',
            'harga_sewa' => '100000',
            'foto_lapangan' => 'kinglapang1.png',
        ]);

        //table Schedule
        Schedule::factory()->create([
            'id_lapangan' => '1',
            'id_gor' => '1',
            'status' => 'Available',
            'waktu' => '06.00 - 07.00',
            'tanggal' => '2022-11-23'
        ]);

        //table Payment
        payment::factory()->create([
            'id_gor' => '1',
            'id_lapangan' => '1',
            'id_user' => '1',
            'jam_mulai' => '06.00',
            'jam_selesai' => '07.00',
            'tanggal' => '2022-11-23',
            'durasi_sewa' => '1 jam',
            'foto_struk' => 'struk.png',
            'status' => 'booked',
            'waktu' => '2022-11-23',
            'subtotal' => '100000'
        ]);
    }
}
